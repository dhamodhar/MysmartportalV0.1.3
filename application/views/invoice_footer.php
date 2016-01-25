        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
  <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
     
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->


<script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->


<script>
$(document).ready(function(){
  
$(".demo2 .rotate").textrotator({
animation: "flip",
speed: 3000
});

});

</script>

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
         <script>

 $(document).ready(function(){
   //initialize datatable
            
	  var test1 = "";
	  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/SalesPersonDetails",
            dataType: "text",
            success: function(xml){
			
			$(xml).find('salesrep').each(function(){
			            var repid= $(this).find('repid').text();
						var repname = $(this).find('repname').text();
						var repphone= $(this).find('repphone').text();
						var repemail= $(this).find('repemail').text();
						var repfax= $(this).find('repfax').text();
						var region_desc= $(this).find('region_desc').text();
                        var branch_desc= $(this).find('branch_desc').text();
						var csr_fname= $(this).find('csr_fname').text();
						var csr_lname= $(this).find('csr_lname').text();
						var csr_email= $(this).find('csr_email').text();
						var csr_phone= $(this).find('csr_phone').text();
						
						//alert(repid);
						
						$("#sales").html("<li><strong>Sales Rep Id- </strong>"+repid+"</li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong>"+repemail+"</li><li><strong>Phone: </strong>"+repphone+"</li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong>"+csr_email+"</li><li><strong>Phone: </strong>"+csr_phone+"</li>");
		                                   
		   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>
		 
		 <script>

 $(document).ready(function(){
   //initialize datatable
              $('#from').datetimepicker();
                 $('#to').datetimepicker(); 
	  var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_invoices",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('Invoice').each(function(){
				
                var invoice_numb= $(this).find('invoice_numb').text();
				var billto_code= $(this).find('billto_code').text();
					var carr_code= $(this).find('carr_code').text();
				var billname= $(this).find('billname').text();
				var inv_date= $(this).find('inv_date').text();
				var due_date= $(this).find('due_date').text();
				var amount= $(this).find('amount').text();
				var status= $(this).find('entry_type').text();
                                var cust_po= $(this).find('cust_po').text();
                                var tracker_no= $(this).find('tracker_no').text();
				var error =  $(this).find('error').text();
			
	 //alert(due.getMonth());
/**var duedate_month = "";	 
				
				var d= new Date(inv_date);
 var inv_date_final = d.getMonth()+"-"+d.getDate()+"-"+d.getFullYear();

			var due= new Date(due_date);
			if(due.getMonth()==0)
				{
				duedate_month = 1;
				
				}else
				{
				
				duedate_month = due.getMonth();
				}
 var due_date_final = duedate_month+"-"+due.getDate()+"-"+due.getFullYear();
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);*/
			   if(error!="Error"){
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+invoice_numb+">"+invoice_numb+"</a></td><td style='widtd:150px;'>"+inv_date+"</td><td style='widtd:150px;'>$ "+amount+"</td><td style='widtd:200px;'>"+due_date+"</td><td style='widtd:200px;'>"+tracker_no+"</td><td style='widtd:200px;'>"+cust_po+"</td></tr>");
                 //datatables();  
                                 }				 
		   });
		     $('#orders-list').DataTable({
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
                        "sInfo":  'Found _TOTAL_ records',
                        "oPaginate": {
                            "sPage":    "Page ",
                            "sPageOf":  "of",
                            "sNext":  '<i class="fa fa-angle-right"></i>',
                            "sPrevious":  '<i class="fa fa-angle-left"></i>'
                        }
                    },
                    "pagingType": "input"
                   
                //*initialize datatable
				});
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>
        <!--/ Page Specific Scripts -->

  <script type="text/javascript">
function searchbydates()
{
$('#orders-list').DataTable( {
    destroy: true,
    searching: false
} );

 var invoicenumber = document.getElementById("invoice_number").value;
var fromdate = document.getElementById("from").value;
 var todate =document.getElementById("to").value;
 
  if(invoicenumber=="")
  {
    invoicenumber = "%20";
  }
  if(invoicenumber==""){
 //alert("t");
 invoicenumber = "%20";
 
 }
 //alert(order_id+" "+todate+" "+fromdate);
 var d = new Date(fromdate);

 var t = new Date(todate);
 var from = (d.getMonth()+1)+"-"+d.getDate()+"-"+d.getFullYear();
  var to = (t.getMonth()+1)+"-"+t.getDate()+"-"+t.getFullYear();
  if(from=="NaN-NaN-NaN")
  {
   
  from = "%20";
  
  }
  if(to=="NaN-NaN-NaN")
  {
  to = "%20";
  
  }
  //alert(from+","+to+","+invoicenumber);
//alert(invoicenumber);
 $(document).ajaxStart(function(){
 	$('#orders-list tbody').html("");
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/invoice_search/"+from+"/"+to+"/"+invoicenumber,
            dataType: "text",
            success: function(xml){
			//alert(xml);
			$('#orders-list tbody').html("");
                $(xml).find('invoice').each(function(){
				
                var invoice_numb= $(this).find('invoice_numb').text();
				var carr_code= $(this).find('carr_code').text();
				var billto_code= $(this).find('billto_code').text();
				var billname= $(this).find('billname').text();
				var inv_date= $(this).find('inv_date').text();
				var due_date= $(this).find('due_date').text();
				var amount= $(this).find('amount').text();
				var status= $(this).find('entry_type').text();
			
	 //alert(due.getMonth());
var duedate_month = "";	 
				
				var d= new Date(inv_date);
 var inv_date_final = d.getMonth()+"-"+d.getDate()+"-"+d.getFullYear();

					var due= new Date(due_date);
					if(due.getMonth()==0)
				{
				duedate_month = 1;
				
				}else
				{
				
				duedate_month = due.getMonth();
				}
 var due_date_final = duedate_month+"-"+due.getDate()+"-"+due.getFullYear();	
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+invoice_numb+">"+invoice_numb+"</a></td><td style='widtd:150px;'>"+inv_date_final+"</td><td style='widtd:150px;'>$ "+amount+"</td><td style='widtd:200px;'>"+due_date_final +"</td><td style='widtd:200px;'>"+carr_code+"</td></tr>");
                 //datatables();           
		   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });



}
         
             
                
 $('#feed-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });
</script>







        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>


    </body>
</html>