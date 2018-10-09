
ctable();

$('#datepicker').datepicker({
    autoclose: true,
    format:"yyyy.mm.dd"
});

$('#ctbl').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
});

$('[data-mask]').inputmask();

 $(document).ready(function(){
     $("#ctel").inputmask("99-9999999");
 });

 $('#btnremove').click(function(){
     $.ajax({
         method : "POST",
         url : "app/deleteCustomer.php",
         contentType : "application/x-www-form-urlencoded",
         data : {
             cid : $("#txtCID").val(),
         }
     }).done( function (response) {
         console.log(response);
     }).fail(function (xhr, aa,error) {
         console.log(error);
     });
     alert('Customer has been successfully deleted');
     window.location.replace('http://localhost/Document/POS/Pos-page/Add%20Customer.html');
 });
//////////////////////////////////////////////////////////////////////////////get table
 function ctable(){

     $.ajax({
         method: 'GET',
         url : 'app/viewAllCustomer.php',
         aysnc: true,
         data:$("#frmcustomer").serialize()
     }).done(function(response){
         console.log(response);

         var customers = JSON.parse(response);
         var table = $('#ctbl').DataTable();
         for(var i in customers){
             console.log(customers[i][0]);
             table.row.add([customers[i][0], customers[i][1], customers[i][2], customers[i][3], customers[i][4]]).draw(true);
             // var rowData = "<tr>" +
             //     "<td>"+ customers[i][0] +"</td>" +
             //     "<td>"+ customers[i][1] +"</td>" +
             //     "<td>"+ customers[i][2] +"</td>" +
             //     "<td>"+ customers[i][3] +"</td>" +
             //     "<td>"+ customers[i][4] +"</td>" +
             //     "</tr>"
             // $("#ctbl tbody").append(rowData);
         }
         $("#ctbl tbody").on('click', 'tr', function (ev) {
             var row = table.row(this).data();
             console.log('sffd');
             $("#txtCID").val(row[0]);
             $("#cname").val(row[1]);
             $("#ctel").val(row[2]);
             $("#address").val(row[3]);
             $("#datepicker").val(row[4]);
         });



     });
 };
//////////////////////////////////////////////////////////////////////////////////////////////////add table


