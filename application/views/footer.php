        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/excanvas.js"></script>

           <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->


<script>
            $(window).load(function(){


                // Initialize Pie Chart
                var data6 = [
                    { label: 'Handheld Printer', data: 16.6 },
                    { label: 'RFID', data: 16.6 },
                    { label: 'Services', data: 16.6 },
                    { label: 'Wireless', data: 16.6 },
                    { label: 'Labels', data: 16.6},
                    { label: 'Software', data: 16.6}
                ];

                var options6 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.15
                            }
                        }
                    },

                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: false,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot6 = $.plot($("#pie-chart"), data6, options6);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot6.resize();
                    plot6.setupGrid();
                    plot6.draw();
                });
                // * Initialize Pie Chart
             
            });
        </script>





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
						$("#sales").html("<li><strong>Sales Rep Id- </strong>"+repid+"</li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong>"+repemail+"</li><li><strong>Phone: </strong>"+repphone+"</li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong>"+csr_email+"</li><li><strong>Email: </strong>"+csr_phone+"</li>");
			   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>






<script type="text/javascript">
$(document).ready(function() {
//alert("test");
    $('#selecctall').click(function(event) {  //on click 
	
	//alert("test");
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
</script>
<script type="text/javascript">
function resetpassword(email)
{
	var email_final = email.replace("@", "zzz");
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/resetpassword_link/"+email_final,
            dataType: "text",
            success: function(xml){
			    //alert(xml);
				document.getElementById('succ').style.display = 'block';
					document.getElementById('reset_pass').style.display = 'none';
               
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
	
	
	
}
</script>

   <script>

function getdetails()
{
//alert("test");
   var email = document.getElementById("email").value;
   
   
   var tt = email.replace('@','ZZZ');
  // alert(tt);
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contact_info/"+tt,
            dataType: "text",
            success: function(xml){
			    //alert(xml);
                $(xml).find('customercontact').each(function(){
                                var first_name= $(this).find('first_name').text();
				var last_name= $(this).find('last_name').text();
                                var cust_code= $(this).find('cust_code').text();
                                var phone1= $(this).find('phone1').text(); 
                                var address1= $(this).find('address1').text(); 
                                var address2= $(this).find('address2').text();
                                var address3= $(this).find('address3').text();
                                var city= $(this).find('city').text();
                                var state= $(this).find('state').text();
                                var zip= $(this).find('zip').text();
                                var country= $(this).find('country').text();  
                                var bus_name= $(this).find('bus_name').text(); 
                                var job_code= $(this).find('job_code').text();   
				$("#first_name").val(first_name);
				$("#last_name").val(last_name);
                                $("#cust_code").val(cust_code);
                                $("#phone1").val(phone1);
                                $("#address1").val(address1);
                                $("#address2").val(address2);
                                $("#address3").val(address3);
                                $("#city").val(city);
                                $("#state").val(state);
                                $("#zip").val(zip);
                                $("#country").val(country);
                                $("#bus_name").val(bus_name);
                                $("#job_code").val(job_code);
				 });
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
}
           
        </script>

 <script>
            $(window).load(function(){

                //initialize datatable
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
                    "pagingType": "input",
                    "ajax": '<?php echo base_url()?>assets/extras/orders.json',
                    "order": [[ 1, "asc" ]],
                    "columns": [
                        
                        {  "data": "id",
                                                  "render":function (data) {
                                                  if (data === '1') {
                                   return '<a href="order-view.html">' + data + '</a>'
                               } else {
                                   return '<a href="order-view.html">' + data + '</a>'
                               }
                                                 
                                                  } },
                        {
                            "data": "date",
                            "className": "formatDate"
                        },
                        { "data": "placedby" },
                        {
                            "type": "html",
                            "data": "status",
							 "render":function (data) {
                                                  if (data === '1') {
                                   return '<a href="invoice-view.html">' + data + '</a>'
                               } else {
                                   return '<a href="invoice-view.html">' + data + '</a>'
                               }
                                                 
                                                  }
                           
                        },
                        { "data": "shipto" , "type": "num-fmt",
                            "render": function (data) {
                                return '$' + parseFloat(data).toFixed(2);
                            }},
                        { "data": "quantity",
						 },
                        {
                           "type": "html",
                            "data": "total",
                            "render": function (data) {
                                if (data === 'sent') {
                                    return '<span class="label bg-success">' + data + '</span>'
                                } else if (data === 'closed') {
                                    return '<span class="label bg-warning">' + data + '</span>'
                                } else if (data === 'cancelled') {
                                    return '<span class="label bg-lightred">' + data + '</span>'
                                } else if (data === 'pending') {
                                    return '<span class="label bg-primary">' + data + '</span>'
                                }
                            }
                        },
                        
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "drawCallback": function(settings, json) {
                        $(".formatDate").each(function (idx, elem) {
                            $(elem).text($.format.date($(elem).text(), "MMM d, yyyy"));
                        });
                        $('#select-all').change(function() {
                            if ($(this).is(":checked")) {
                                $('#orders-list tbody .selectMe').prop('checked', true);
                            } else {
                                $('#orders-list tbody .selectMe').prop('checked', false);
                            }
                        });
                    }
                });
                //*initialize datatable
            });
        </script>




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                // Initialize Statistics chart
                var data = [{
                    data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 4
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot = $.plot($("#statistics-chart"), data, options);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot.resize();
                    plot.setupGrid();
                    plot.draw();
                });
                // * Initialize Statistics chart

                //Initialize morris chart
                Morris.Donut({
                    element: 'browser-usage',
                    data: [
                        {label: 'Chrome', value: 25, color: '#00a3d8'},
                        {label: 'Safari', value: 20, color: '#2fbbe8'},
                        {label: 'Firefox', value: 15, color: '#72cae7'},
                        {label: 'Opera', value: 5, color: '#d9544f'},
                        {label: 'Internet Explorer', value: 10, color: '#ffc100'},
                        {label: 'Other', value: 25, color: '#1693A5'}
                    ],
                    resize: true
                });
                //*Initialize morris chart


                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels


                // Initialize rickshaw chart
                var graph;

                var seriesData = [ [], []];
                var random = new Rickshaw.Fixtures.RandomData(50);

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                graph = new Rickshaw.Graph( {
                    element: document.querySelector("#realtime-rickshaw"),
                    renderer: 'area',
                    height: 133,
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: seriesData[0]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: seriesData[1]
                    }]
                });

                var hoverDetail = new Rickshaw.Graph.HoverDetail( {
                    graph: graph,
                });

                graph.render();

                setInterval( function() {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph.update();

                },1000);
                //* Initialize rickshaw chart

                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker


                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's


                //initialize datatable
                $('#project-progress').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                });
                //*initialize datatable

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor
            });
 $('#feed-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });
        </script>
        <!--/ Page Specific Scripts -->
		
		
		<script type="text/javascript">
		function get_ticket_status()
		{
		
		 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/ticket_status_api/test",
            dataType: "text",
            success: function(xml){
			    alert(xml);
				document.getElementById("ticket_info").style.display = "block";
                $(xml).find('checkserviceticket').each(function(){
              
				 });
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
		
		
		
		
		}



  
		</script>


    <script type="text/javascript">
		function getstatus()
		{
		var ticket_number = document.getElementById('ticket_number').value;
		
		
		if(ticket_number=="")
		{
		alert("Enter Ticket Number");
		
		
		}else{
		 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/getopenticket_details/"+ticket_number,
            dataType: "text",
            success: function(xml){
			   $(xml).find('queryticketinfo').each(function(){
				
				        var opened= $(this).find('opened').text();
						var lastaction = $(this).find('lastaction').text();
				        var enteredby= $(this).find('enteredby').text();
						var ticketnumber = $(this).find('ticketnumber').text();

				        var problemdescription= $(this).find('problemdescription').text();
						var currentstatus = $(this).find('currentstatus').text();
				        var customername= $(this).find('customername').text();
						var calledinby = $(this).find('calledinby').text();
				        var email= $(this).find('email').text();
						var serviceagent = $(this).find('serviceagent').text();
				        var partnumber= $(this).find('partnumber').text();
						var partdescription = $(this).find('partdescription').text();
				        var serialnumber= $(this).find('serialnumber').text();
						var city = $(this).find('city').text();
				        var state= $(this).find('state').text();
						var lastactivity = $(this).find('lastactivity').text();
				        var do_content= $(this).find('do').text();
	                  jQuery('#cancel').click();
					//alert("test");	
					//document.getElementById('full_info').style.display='block';
					document.getElementById('ticket_info').style.display='block';	
					
					
				$("#ticket_info").html("<div class='col-md-6'>Opned: "+opened+"</div><div class='col-md-6'>Last Action: "+lastaction+"</div><div class='col-md-6'>Entered By: "+enteredby+"</div><div class='col-md-6'>Ticket Number: "+ticketnumber+"</div><div class='col-md-6'>Current Status: "+currentstatus+"</div><div class='col-md-6'>Customer Name: "+customername+"</div><div class='col-md-6'>Problem Description: "+problemdescription+"</div>")
				
				
				});
               
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
		
		
		}
		}
		
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