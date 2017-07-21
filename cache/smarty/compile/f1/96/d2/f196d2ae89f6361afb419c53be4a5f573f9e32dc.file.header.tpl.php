<?php /* Smarty version Smarty-3.1.19, created on 2017-07-07 00:56:25
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/modules/correos/views/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223678382595ec01922fb65-99285070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f196d2ae89f6361afb419c53be4a5f573f9e32dc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop_fruteriadelvero/prestashop/modules/correos/views/templates/admin/header.tpl',
      1 => 1499381781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223678382595ec01922fb65-99285070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paramsBack' => 0,
    'file' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595ec01929c9b7_90859844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595ec01929c9b7_90859844')) {function content_595ec01929c9b7_90859844($_smarty_tpl) {?>
 
<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paramsBack']->value['JS_FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
    <script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paramsBack']->value['CSS_FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
    <link type="text/css" rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
    <?php } ?>
<script>
   var customer_orders;
   var customer_addresses;
   var customer_id_addresses = [];
   var customer_mail;
   var rma_labels = [<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paramsBack']->value['RMA_LABLES'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
];
$(function() {

  $('#want-be-client').click(function () {
      $("#CorreosModal h4.modal-title").html("<?php echo smartyTranslate(array('s'=>'Customer Application Form','mod'=>'correos'),$_smarty_tpl);?>
")
      $("#CorreosModalContent").html($("#correos-intro-form"));
      $("#CorreosModal").modal();
      
   });
   $("#correos-intro-form").validate({
      showErrors: function(errorMap, errorList) {
        $("#correos-intro-form .form-errors").html("<div class='bootstrap'> " +
         "<div class='alert alert-warning text-center'><i class='icon-warning-sign'></i> " +
         "<?php echo smartyTranslate(array('s'=>'All fields must be completed before you submit the form','mod'=>'correos'),$_smarty_tpl);?>
</div>");
      }
   });
   $("#sender").validate({
        rules: {
          sender_nombre: {
            required: { 
                depends: function(element) {
                    return ($('#sender_presona_contacto').val() == '' ||  $('#sender_empresa').val() == '');
                }
            }
          },
          sender_apellidos: {
             required: { 
                depends: function(element) {
                    return ($('#sender_presona_contacto').val() == '' ||  $('#sender_empresa').val() == '');
                }
            }
          },
          sender_empresa: {
             required: { 
                depends: function(element) {
                    return ($('#sender_nombre').val() == '' ||  $('#sender_apellidos').val() == '');
                }
            }
          },
          sender_presona_contacto: {
             required: { 
                depends: function(element) {
                    return ($('#sender_nombre').val() == '' ||  $('#sender_apellidos').val() == '');
                }
            }
          },
          sender_dni: {
            required: true
          },
          sender_direccion: {
            required: true
          },
          sender_localidad: {
            required: true
          },
          sender_cp: {
            required: true
          },
          sender_provincia: {
            required: true
          }, 
        },
      showErrors: function(errorMap, errorList) {
        $("#sender .form-errors").html("<div class='bootstrap'> " +
         "<div class='alert alert-warning text-center'><i class='icon-warning-sign'></i> " +
         "<?php echo smartyTranslate(array('s'=>'All fields must be completed before you submit the form','mod'=>'correos'),$_smarty_tpl);?>
</div>");
        console.log(this.numberOfInvalids());
      },
       errorPlacement: function(error, element) {
        console.log(element);
      }
   });
   
   $("#sender label").addClass("required");
   $("#sender_tel_fijo, #sender_movil, #sender_email").prev().removeClass("required");
   /* Sender */
   $("#add_sender").parent('div').addClass('pull-right');
   var senders_json = jQuery.parseJSON( $("#senders_json").val() );
   
   $('#add_sender').click(function () {
        var sender_html = $("#tab-sender #sender").clone();
       $("#CorreosModalContent").html(sender_html);
    
       $("#CorreosModal h4.modal-title").html($(this).html())
       
       $("#CorreosModalContent #sender .form-group:first").remove();
       $("#CorreosModalContent #sender .form-group:first").remove();
       $('#CorreosModalContent #sender input[type=text]').each(function() {
         $(this).val('');
       })

       $("#CorreosModal").modal();
        
      
    });
     $("#CorreosModal").on('hide.bs.modal', function () {
        $('.modal-backdrop').remove();
    });
    $('#select_sender').change(function () {
      var selected_key =  $(this).val();
      jQuery.each(senders_json, function(key, sender) {
            if(key == selected_key) {
              
               $("#sender_nombre").val(sender.nombre);
               $("#sender_apellidos").val(sender.apellidos);
               $("#sender_dni").val(sender.dni);
               $("#sender_empresa").val(sender.empresa);
               $("#sender_presona_contacto").val(sender.presona_contacto);
               $("#sender_direccion").val(sender.direccion);
               $("#sender_localidad").val(sender.localidad);
               $("#sender_cp").val(sender.cp);
               $("#sender_provincia").val(sender.provincia);
               $("#sender_tel_fijo").val(sender.tel_fijo);
               $("#sender_movil").val(sender.movil);
               $("#sender_email").val(sender.email);
               
               
            }
            
         });
    });
    $('#recipient_sender').change(function () {
      var selected_key =  $(this).val();
      jQuery.each(senders_json, function(key, sender) {
            if(key == selected_key) {
              
               $("#recipient_nombre").val(sender.nombre);
               $("#recipient_apellidos").val(sender.apellidos);
               $("#recipient_dni").val(sender.dni);
               $("#recipient_empresa").val(sender.empresa);
               $("#recipient_presona_contacto").val(sender.presona_contacto);
               $("#recipient_direccion").val(sender.direccion);
               $("#recipient_localidad").val(sender.localidad);
               $("#recipient_cp").val(sender.cp);
               $("#recipient_provincia").val(sender.provincia);
               $("#recipient_tel_fijo").val(sender.tel_fijo);
               $("#recipient_movil").val(sender.movil);
               $("#recipient_email").val(sender.email);
               
               
            }
            
         });
    });
    $('#collection_sender').change(function () {
      var selected_key =  $(this).val();
      jQuery.each(senders_json, function(key, sender) {
            if(key == selected_key) {
              
               $("#collection_req_name").val(sender.nombre + ' ' + sender.apellidos);
               $("#collection_req_address").val(sender.direccion);
               $("#collection_req_city").val(sender.localidad);
               $("#collection_req_postalcode").val(sender.cp);
               $("#collection_req_state").val(sender.provincia);
               $("#collection_req_phone").val(sender.tel_fijo);
               $("#collection_req_mobile_phone").val(sender.movil);
               $("#collection_req_email_cc").val(sender.email);
               
               
            }
            
         });
    });
    
    

    /*Search shipping orders*/
   //var dateStart = parseDate($("#orderFilter_dateFrom").val());
   //var dateEnd = parseDate($("#orderFilter_dateTo").val());
    var dateStart = new Date($("#orderFilter_dateFrom").val());
   var dateEnd = new Date($("#orderFilter_dateTo").val());    
   
   $("#local_orderFilter_dateFrom").datepicker({
      altField:"#orderFilter_dateFrom",
      altFormat: 'yy-mm-dd'
   });
                 
   $("#local_orderFilter_dateTo").datepicker({
      altField:"#orderFilter_dateTo",
      altFormat: 'yy-mm-dd'
   });
                
   if (dateStart !== null){
      $("#local_orderFilter_dateFrom").datepicker("setDate", dateStart);
   }
   if (dateEnd !== null){
      $("#local_orderFilter_dateTo").datepicker("setDate", dateEnd);
   }
   $("input[name='collection_date']").datepicker();
   $("input[name='collection_req_date']").datepicker();

   
   $('#customer').typeWatch({
			captureLength: 1,
			highlight: true,
			wait: 100,
			callback: function(){ searchCustomers(); }
			});          

   $('#customers').on('click','button.setup-customer',function(e){
			e.preventDefault();
         $("#customer_name").val($(this).data('customer_name'));
         $("#customer_id").val($(this).data('customer'));
         customer_mail = $(this).data('customer_mail');
			setupCustomer($(this).data('customer'));
         
	
			$(this).closest('.customerCard').addClass('selected-customer');

		
			
		});
      
      $('#lastOrders').on('click','.fill_address',function(e){
         e.preventDefault();
         var order_index = $(this).data('index');
         var customer_order = customer_orders[order_index];
         var id_carrier = customer_order.id_carrier;
         var id_address = 0;
         $("#customer_id_order").val(customer_order.id_order);
   
         if (customer_id_addresses.indexOf(customer_order.id_address_delivery) >= 0) {
            id_address = customer_order.id_address_delivery;
               
         } else {
            id_address = customer_order.id_address_invoice;
            
         }
         
     
         $.each(customer_addresses, function() {
            if(id_address == this.id_address) {
              
               $("#customer_sender_nombre").val(this.firstname);
               $("#customer_sender_apellidos").val(this.lastname);
               $("#customer_sender_dni").val(this.dni);
               $("#customer_sender_empresa").val(this.company);
               $("#customer_sender_presona_contacto").val(this.firstname + " " + this.lastname);
               var address = this.address1;
               if(this.address2 != '')
                  address += " " + this.address2;
               $("#customer_sender_direccion").val(address);
               $("#customer_sender_localidad").val(this.city);
               $("#customer_sender_cp").val(this.postcode);
               $("#customer_sender_provincia").val(this.state);
               $("#customer_sender_tel_fijo").val(this.phone);
               $("#customer_sender_movil").val(this.phone_mobile);
               $("#customer_sender_email").val(customer_mail);
               
               $("#rma_form").show();
               $.scrollTo($('#rma_form'), 1000);
               console.log(this);
            }
         });
               
      });
      $('#lastOrders').on('click','.request_collection',function(e){
         e.preventDefault();
         var order_index = $(this).data('index');
         var customer_order = customer_orders[order_index];
         var id_carrier = customer_order.id_carrier;
         var id_address = 0;
         $("#customer_id_order").val(customer_order.id_order);
   
         if (customer_id_addresses.indexOf(customer_order.id_address_delivery) >= 0) {
            id_address = customer_order.id_address_delivery;
               
         } else {
            id_address = customer_order.id_address_invoice;
            
         }
         
     
         $.each(customer_addresses, function() {
            if(id_address == this.id_address) {
              
               $("#CorreosModalRmaCollection #collection_clientname").val(this.firstname + " " + this.lastname);
               
               var address = this.address1;
               if(this.address2 != '')
                  address += " " + this.address2;
               $("#CorreosModalRmaCollection #collection_address").val(address);
               $("#CorreosModalRmaCollection #collection_city").val(this.city);
               $("#CorreosModalRmaCollection #collection_postalcode").val(this.postcode);
               $("#CorreosModalRmaCollection #collection_state").val(this.state);
               $("#CorreosModalRmaCollection #collection_phone").val(this.phone);
               $("#CorreosModalRmaCollection #collection_mobile_phone").val(this.phone_mobile);
               
            }
         });
         
         $("#CorreosModalRmaCollection").modal();
      });
      $('#request_collection').on('click',function(e){
          $("#CorreosModalCollection").modal();
      });
      
      
});

function searchCustomers()
	{
      $("#loading-mask").show();
		$.ajax({
			type:"POST",
			url : "<?php echo strtr($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
			async: true,
			dataType: "json",
			data : {
				ajax: "1",
				tab: "AdminCustomers",
				action: "searchCustomers",
				customer_search: $('#customer').val()},
			success : function(res)
			{
                if(res.found)
				{
					var html = '';
					$.each(res.customers, function() {
						html += '<div class="customerCard col-lg-4">';
						html += '<div class="panel message-item">';
						html += '<div class="panel-heading"><span class="pull-right">#'+this.id_customer+'</span>';
						html += this.firstname+' '+this.lastname + '</div>';
						html += '<button type="button" data-customer_name="'+this.firstname+' '+this.lastname +'" data-customer="'+this.id_customer+'" data-customer_mail="'+this.email+'" class="setup-customer btn btn-default pull-right"><i class="icon-arrow-right"></i> <?php echo smartyTranslate(array('s'=>'Choose','mod'=>'correos'),$_smarty_tpl);?>
</button>';
						html += '</div>';
						html += '</div>';
					});
				}
				else
					html = '<div class="alert alert-warning"><i class="icon-warning-sign"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'No customers found','mod'=>'correos'),$_smarty_tpl);?>
</div>';
				$('#customers').html(html);
            
            $("#loading-mask").hide();
			}
		});
	}
function setupCustomer(idCustomer)
	{
		$('#lastOrders').hide();
      $("#loading-mask").show();
		
		id_customer = idCustomer;
		id_cart = 0;
	
		$.ajax({
			type:"POST",
			url : "<?php echo strtr($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
			async: false,
			dataType: "json",
			data : {
				ajax: "1",
				token: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCarts'),$_smarty_tpl);?>
",
				tab: "AdminCarts",
				action: "searchCarts",
				id_customer: id_customer,
				id_cart: id_cart
			},
			success : function(res)
			{
				if(res.found)
				{
				
					var html_orders = '';
				
               customer_orders = res.orders;
               customer_addresses = res.addresses;
               customer_id_addresses = [];
               $.each(res.addresses, function() {
                  customer_id_addresses.push(this.id_address);
               });
               
					$.each(res.orders, function(index, order) {
						html_orders += '<tr>';
						html_orders += '<td>'+order.id_order+'</td><td>'+order.date_add+'</td><td>'+(order.nb_products ? order.nb_products : '0')+'</td><td>'+order.total_paid_real+'</span></td><td>'+order.order_state+'</td>';
						if (rma_labels.indexOf(parseInt(order.id_order)) >= 0) {
                     html_orders += '<td><a href="../modules/correos/pdftmp/d-'+order.id_order+'.pdf" target="_blank"><?php echo smartyTranslate(array('s'=>'Download RMA Label','mod'=>'correos'),$_smarty_tpl);?>
</a> <span style="padding:0 10px">|</span>';
                     html_orders += '<a class="request_collection" data-index="'+index+'" data-id_order="'+order.id_order+'" title="<?php echo smartyTranslate(array('s'=>'Request collection','mod'=>'correos'),$_smarty_tpl);?>
" href="#"> <?php echo smartyTranslate(array('s'=>'Request collection','mod'=>'correos'),$_smarty_tpl);?>
</a></td>';
                  } else {
                  html_orders += '<td>-</td>';
                  }
                     
                  html_orders += '<td class="text-right">';
                  html_orders += '<a href="#" "title="<?php echo smartyTranslate(array('s'=>'Use','mod'=>'correos'),$_smarty_tpl);?>
" class="fill_address btn btn-default" data-index="'+index+'" data-id_order="'+order.id_order+'"><i class="icon-arrow-right"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Use','mod'=>'correos'),$_smarty_tpl);?>
</a>';
						html_orders += '</td>';
						html_orders += '</tr>';
					});

					$('#lastOrders table tbody').html(html_orders);
               
               $('#lastOrders').show();
               $("#loading-mask").hide();
				}
            
			}
		});
	}
</script>
<style>
#form label.error {
color:red;
}
#form input.error {
border:1px solid red;
}
</style><?php }} ?>
