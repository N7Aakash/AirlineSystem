var TableDatatables = function(){
    var handleCategoryTable = function(){
        var categoryTable = $("#flight_list");
        
        var oTable = categoryTable.dataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                url:
                "http://localhost/AirlineSystem/airline/scripts/flight/manage.php",
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
        
//        categoryTable.on('click','.edit',function(e){
//           $id = $(this).attr('id');
//            $id = $(this).attr('id');
//            $("#edit_category_id").val($id);
//            
//            //fetching all the other values from database using ajax and loading them onto their respective feilds
//            
//            $.ajax({
//                url:"http://localhost/erp/pages/scripts/category/fetch.php",
//                method:"POST",
//                data:{category_id: $id},
//                dataType:"json",
//                success:function(data){
//                    $("#category_name").val(data.category_name);
//                    $("#hsn_code").val(data.hsn_code);
//                    $("#gst_rate").val(data.gst_rate);
//                    $("#editModal").modal('show');
//                },
//            });
//        });
//        categoryTable.on('click','.delete',function(e){
//           $id = $(this).attr('id');
//            $("#recordID").val($id);
//        });
    }
    return{
        
        //main function in javascript to handel all the initialization part
        init:function(){
            handleCategoryTable();
        }
    };
}();

jQuery(document).ready(function(){

    TableDatatables.init();
    
});



