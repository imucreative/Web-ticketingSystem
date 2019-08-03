var save_method; //for save method string
var table;

$(document).ready(function() {
    //datatables
    table = $('.vehicleTable').DataTable({
        //responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "vehicle/ajax_list",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    
    /*
    $(".nameCategory").on('keyup', function(e){
        if(e.keyCode === 13){
            //alert(e.keyCode);
            save();
        }
    });
    */
});



function addVehicle(){
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal-form-vehicle').modal('show'); // show bootstrap modal
    $('.modal-title').text('Input Vehicle'); // Set Title to Bootstrap modal title
}

function editVehicle(id){
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "vehicle/ajax_edit/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
            $('[name="vehicleId"]').val(data.vehicleId);
            $('[name="name"]').val(data.name);
            $('[name="type"]').val(data.type);
            $('[name="chasis"]').val(data.chasis);
            $('[name="engine"]').val(data.engine);
            $('[name="policeNumber"]').val(data.policeNumber);
            
            $('#modal-form-vehicle').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Vehicle'); // Set title to Bootstrap modal title
        }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
        }
    });
}



function saveVehicle(){
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "vehicle/ajax_add";
    } else {
        url = "vehicle/ajax_update";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status){ //if success close modal and reload ajax table
                $('#modal-form-vehicle').modal('hide');
                //reload_table();
                window.open("vehicle", '_self');
            }else{
                for (var i = 0; i < data.inputerror.length; i++) {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').html("<i class='fa fa-plus'></i> Save"); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
        }, error: function (jqXHR, textStatus, errorThrown){
            alert('Error adding / update data');
            $('#btnSave').html("<i class='fa fa-plus'></i> Save"); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
        }
    });
}

function deleteVehicle(id){
    if(confirm('Are you sure delete this data?')){
        // ajax delete data to database
        $.ajax({
            url : "vehicle/ajax_delete/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
                //if success reload ajax table
                $('#modal_form').modal('hide');
                //reload_table();
                window.open("vehicle", '_self');
            }, error: function (jqXHR, textStatus, errorThrown){
                alert('Error deleting data');
            }
        });
    }
}

function reload_table(){
    table.ajax.reload(null,false); //reload datatable ajax 
}