

var TableDatatables = function(){
    var handleSupplierTable = function(){
        var supplierTable = $("#supplier_list");
        
        var oTable = supplierTable.dataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                url:
                "http://localhost/erp/pages/scripts/supplier/manage.php",
                type:"POST",
                
            },
            "lengthMenu": [
                [5 , 15 , 20 , -1],
                [5 , 15 , 25 , "All"]
            ],
            "pageLength": 15, //set the default length
            "order":[
                [0 , " DESC "]
            ],
            "columnDefs":[{
                'orderable': false,
                'targets':[-1]
            }]
        });
        
        supplierTable.on('click','.edit',function(e){
           $id = $(this).attr('id');
            $id = $(this).attr('id');
            $("#edit_supplier_id").val($id);
            
            //fetching all the other values from database using ajax and loading them onto their respective feilds
            
            $.ajax({
                url:"http://localhost/erp/pages/scripts/supplier/fetch.php",
                method:"POST",
                data:{supplier_id: $id},
                dataType:"json",
                success:function(data){
                    $("#supplier_name").val(data.supplier_name);
                    $("#supplier_address").val(data.supplier_address);
                    $("#supplier_email").val(data.supplier_email);
                    $("#supplier_contact").val(data.supplier_contact);
                    $("#gst_no").val(data.gst_no);
                    
                },
            });
        });
        supplierTable.on('click','.delete',function(e){
           $id = $(this).attr('id');
            $("#recordID").val($id);
        });
    }
    return{
        
        //main function in javascript to handel all the initialization part
        init:function(){
            handleSupplierTable();
        }
    };
}();

jQuery(document).ready(function(){
    TableDatatables.init();
    
});




