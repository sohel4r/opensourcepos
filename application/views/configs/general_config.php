<div id="page_title"><?php echo $this->lang->line('config_general_configuration'); ?></div>
<?php
echo form_open('config/save/',array('id'=>'config_form','enctype'=>'multipart/form-data'));
?>
<div id="config_wrapper">
<fieldset id="config_info">
<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>
<ul id="error_message_box" class="error_message_box"></ul>
<legend><?php echo $this->lang->line("config_info"); ?></legend>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_company').':', 'company',array('class'=>'wide required')); ?>
	<div class='form_field'>
		<?php echo form_input(array(
			'name'=>'company',
			'id'=>'company',
			'value'=>$this->config->item('company')));?>
		
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_company_logo').':', 'company_logo',array('class'=>'wide')); ?>
	<div class='form_field'>
	    <?php echo form_upload('company_logo');?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_address').':', 'address',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'address',
		'id'=>'address',
		'rows'=>4,
		'cols'=>17,
		'value'=>$this->config->item('address')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_phone').':', 'phone',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'phone',
		'id'=>'phone',
		'value'=>$this->config->item('phone')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_default_tax_rate_1').':', 'default_tax_1_rate',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'default_tax_1_name',
		'id'=>'default_tax_1_name',
		'size'=>'10',
		'value'=>$this->config->item('default_tax_1_name')!==FALSE ? $this->config->item('default_tax_1_name') : $this->lang->line('items_sales_tax_1')));?>
		
	<?php echo form_input(array(
		'name'=>'default_tax_1_rate',
		'id'=>'default_tax_1_rate',
		'size'=>'4',
		'value'=>$this->config->item('default_tax_1_rate')));?>%
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_default_tax_rate_2').':', 'default_tax_1_rate',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'default_tax_2_name',
		'id'=>'default_tax_2_name',
		'size'=>'10',
		'value'=>$this->config->item('default_tax_2_name')!==FALSE ? $this->config->item('default_tax_2_name') : $this->lang->line('items_sales_tax_2')));?>
		
	<?php echo form_input(array(
		'name'=>'default_tax_2_rate',
		'id'=>'default_tax_2_rate',
		'size'=>'4',
		'value'=>$this->config->item('default_tax_2_rate')));?>%
	</div>
</div>
<!-- GARRISON MODIFIED 4/13/2013 -->
<div class="field_row clearfix">	
	<?php echo form_label($this->lang->line('config_currency_symbol').':', 'currency_symbol',array('class'=>'wide')); ?>
	<div class='form_field'>
		<?php echo form_input(array(
				'name'=>'currency_symbol',
				'id'=>'currency_symbol',
				'value'=>$this->config->item('currency_symbol')));?>
	</div>

	<?php echo form_label($this->lang->line('config_currency_side').':', 'currency_side',array('class'=>''));?>
	<div class='form_field'>
		<?php 
			echo form_checkbox(array(
				'name'=>'currency_side',
				'id'=>'currency_side',
				'value'=>'currency_side',
				'checked'=>$this->config->item('currency_side')));?>
	</div>
</div>
<!-- END MODIFIED -->

<div class="field_row clearfix">    
<?php echo form_label($this->lang->line('config_number_format').':', 'number_format',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo $this->lang->line('config_thousands_separator'); ?>
	<?php echo form_dropdown('thousands_separator', array(
			','    => ', (komma)',
			'.'    => '. (dot)',
			''    => '(none)'
			), 
		$this->config->item('thousands_separator'));
		?>
	<?php echo $this->lang->line('config_decimal_point'); ?>
	<?php echo form_dropdown('decimal_point', array(
			'.'    => '. (dot)',
			','    => ', (komma)'
			), 
		$this->config->item('decimal_point'));
		?>
	</div>
</div>

<div class="field_row clearfix">    
<?php echo form_label($this->lang->line('config_sales_invoice_format').':', 'sales_invoice_format',array('class'=>'wide')); ?>
    <div class='form_field'>
    <?php echo form_input(array(
        'name'=>'sales_invoice_format',
        'id'=>'sales_invoice_format',
        'value'=>$this->config->item('sales_invoice_format'))); ?>
    </div>
</div>

<div class="field_row clearfix">    
<?php echo form_label($this->lang->line('config_recv_invoice_format').':', 'recv_invoice_format',array('class'=>'wide')); ?>
    <div class='form_field'>
    <?php echo form_input(array(
        'name'=>'recv_invoice_format',
        'id'=>'recv_invoice_format',
        'value'=>$this->config->item('recv_invoice_format'))); ?>
    </div>
</div>

<div class="field_row clearfix">	
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_email').':', 'email',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'email',
		'id'=>'email',
		'value'=>$this->config->item('email')));?>
	</div>
</div>


<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_fax').':', 'fax',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'fax',
		'id'=>'fax',
		'value'=>$this->config->item('fax')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_website').':', 'website',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'website',
		'id'=>'website',
		'value'=>$this->config->item('website')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_return_policy').':', 'return_policy',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'return_policy',
		'id'=>'return_policy',
		'rows'=>'4',
		'cols'=>'17',
		'value'=>$this->config->item('return_policy')));?>
	</div>
</div>

<div class="field_row clearfix">
	<?php echo form_label($this->lang->line('config_language').':', 'language',array('class'=>'wide required')); ?>
	<div class='form_field'>
		<?php echo form_dropdown('language', array(
		'en' => 'English',
		'es' => 'Spanish',
		'ru' => 'Russian',
		'nl-BE' => 'Dutch',
		'zh' => 'Chinese',
		'id' => 'Indonesian',
		'fr'	=> 'French',
		'th'	=> 'Thai',
		'tr'	=> 'Turkish'
		),
		$this->config->item('language'));
		?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_timezone').':', 'timezone',array('class'=>'wide required')); ?>
	<div class='form_field'>
	<?php echo form_dropdown('timezone', 
	 array(
		'Pacific/Midway'=>'(GMT-11:00) Midway Island, Samoa',
		'America/Adak'=>'(GMT-10:00) Hawaii-Aleutian',
		'Etc/GMT+10'=>'(GMT-10:00) Hawaii',
		'Pacific/Marquesas'=>'(GMT-09:30) Marquesas Islands',
		'Pacific/Gambier'=>'(GMT-09:00) Gambier Islands',
		'America/Anchorage'=>'(GMT-09:00) Alaska',
		'America/Ensenada'=>'(GMT-08:00) Tijuana, Baja California',
		'Etc/GMT+8'=>'(GMT-08:00) Pitcairn Islands',
		'America/Los_Angeles'=>'(GMT-08:00) Pacific Time (US & Canada)',
		'America/Denver'=>'(GMT-07:00) Mountain Time (US & Canada)',
		'America/Chihuahua'=>'(GMT-07:00) Chihuahua, La Paz, Mazatlan',
		'America/Dawson_Creek'=>'(GMT-07:00) Arizona',
		'America/Belize'=>'(GMT-06:00) Saskatchewan, Central America',
		'America/Cancun'=>'(GMT-06:00) Guadalajara, Mexico City, Monterrey',
		'Chile/EasterIsland'=>'(GMT-06:00) Easter Island',
		'America/Chicago'=>'(GMT-06:00) Central Time (US & Canada)',
		'America/New_York'=>'(GMT-05:00) Eastern Time (US & Canada)',
		'America/Havana'=>'(GMT-05:00) Cuba',
		'America/Bogota'=>'(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
		'America/Caracas'=>'(GMT-04:30) Caracas',
		'America/Santiago'=>'(GMT-04:00) Santiago',
		'America/La_Paz'=>'(GMT-04:00) La Paz',
		'Atlantic/Stanley'=>'(GMT-04:00) Faukland Islands',
		'America/Campo_Grande'=>'(GMT-04:00) Brazil',
		'America/Goose_Bay'=>'(GMT-04:00) Atlantic Time (Goose Bay)',
		'America/Glace_Bay'=>'(GMT-04:00) Atlantic Time (Canada)',
		'America/St_Johns'=>'(GMT-03:30) Newfoundland',
		'America/Araguaina'=>'(GMT-03:00) UTC-3',
		'America/Montevideo'=>'(GMT-03:00) Montevideo',
		'America/Miquelon'=>'(GMT-03:00) Miquelon, St. Pierre',
		'America/Godthab'=>'(GMT-03:00) Greenland',
		'America/Argentina/Buenos_Aires'=>'(GMT-03:00) Buenos Aires',
		'America/Sao_Paulo'=>'(GMT-03:00) Brasilia',
		'America/Noronha'=>'(GMT-02:00) Mid-Atlantic',
		'Atlantic/Cape_Verde'=>'(GMT-01:00) Cape Verde Is.',
		'Atlantic/Azores'=>'(GMT-01:00) Azores',
		'Europe/Belfast'=>'(GMT) Greenwich Mean Time : Belfast',
		'Europe/Dublin'=>'(GMT) Greenwich Mean Time : Dublin',
		'Europe/Lisbon'=>'(GMT) Greenwich Mean Time : Lisbon',
		'Europe/London'=>'(GMT) Greenwich Mean Time : London',
		'Africa/Abidjan'=>'(GMT) Monrovia, Reykjavik',
		'Europe/Amsterdam'=>'(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
		'Europe/Belgrade'=>'(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
		'Europe/Brussels'=>'(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
		'Africa/Algiers'=>'(GMT+01:00) West Central Africa',
		'Africa/Windhoek'=>'(GMT+01:00) Windhoek',
		'Asia/Beirut'=>'(GMT+02:00) Beirut',
		'Africa/Cairo'=>'(GMT+02:00) Cairo',
		'Asia/Gaza'=>'(GMT+02:00) Gaza',
		'Africa/Blantyre'=>'(GMT+02:00) Harare, Pretoria',
		'Asia/Jerusalem'=>'(GMT+02:00) Jerusalem',
		'Europe/Minsk'=>'(GMT+02:00) Minsk',
		'Asia/Damascus'=>'(GMT+02:00) Syria',
		'Europe/Moscow'=>'(GMT+03:00) Moscow, St. Petersburg, Volgograd',
		'Africa/Addis_Ababa'=>'(GMT+03:00) Nairobi',
		'Asia/Tehran'=>'(GMT+03:30) Tehran',
		'Asia/Dubai'=>'(GMT+04:00) Abu Dhabi, Muscat',
		'Asia/Yerevan'=>'(GMT+04:00) Yerevan',
		'Asia/Kabul'=>'(GMT+04:30) Kabul',
	 	'Asia/Baku'=>'(GMT+05:00) Baku',/*GARRISON ADDED 4/20/2013*/
	 	'Asia/Yekaterinburg'=>'(GMT+05:00) Ekaterinburg',
		'Asia/Tashkent'=>'(GMT+05:00) Tashkent',
		'Asia/Kolkata'=>'(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
		'Asia/Katmandu'=>'(GMT+05:45) Kathmandu',
		'Asia/Dhaka'=>'(GMT+06:00) Astana, Dhaka',
		'Asia/Novosibirsk'=>'(GMT+06:00) Novosibirsk',
		'Asia/Rangoon'=>'(GMT+06:30) Yangon (Rangoon)',
		'Asia/Bangkok'=>'(GMT+07:00) Bangkok, Hanoi, Jakarta',
		'Asia/Krasnoyarsk'=>'(GMT+07:00) Krasnoyarsk',
		'Asia/Hong_Kong'=>'(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
		'Asia/Irkutsk'=>'(GMT+08:00) Irkutsk, Ulaan Bataar',
		'Australia/Perth'=>'(GMT+08:00) Perth',
		'Australia/Eucla'=>'(GMT+08:45) Eucla',
		'Asia/Tokyo'=>'(GMT+09:00) Osaka, Sapporo, Tokyo',
		'Asia/Seoul'=>'(GMT+09:00) Seoul',
		'Asia/Yakutsk'=>'(GMT+09:00) Yakutsk',
		'Australia/Adelaide'=>'(GMT+09:30) Adelaide',
		'Australia/Darwin'=>'(GMT+09:30) Darwin',
		'Australia/Brisbane'=>'(GMT+10:00) Brisbane',
		'Australia/Hobart'=>'(GMT+10:00) Hobart',
		'Asia/Vladivostok'=>'(GMT+10:00) Vladivostok',
		'Australia/Lord_Howe'=>'(GMT+10:30) Lord Howe Island',
		'Etc/GMT-11'=>'(GMT+11:00) Solomon Is., New Caledonia',
		'Asia/Magadan'=>'(GMT+11:00) Magadan',
		'Pacific/Norfolk'=>'(GMT+11:30) Norfolk Island',
		'Asia/Anadyr'=>'(GMT+12:00) Anadyr, Kamchatka',
		'Pacific/Auckland'=>'(GMT+12:00) Auckland, Wellington',
		'Etc/GMT-12'=>'(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
		'Pacific/Chatham'=>'(GMT+12:45) Chatham Islands',
		'Pacific/Tongatapu'=>'(GMT+13:00) Nuku\'alofa',
		'Pacific/Kiritimati'=>'(GMT+14:00) Kiritimati'
		), $this->config->item('timezone') ? $this->config->item('timezone') : date_default_timezone_get());
		?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_print_after_sale').':', 'print_after_sale',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_checkbox(array(
		'name'=>'print_after_sale',
		'id'=>'print_after_sale',
		'value'=>'print_after_sale',
		'checked'=>$this->config->item('print_after_sale')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_receiving_calculate_average_price').':', 'receiving_calculate_average_price',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_checkbox(array(
		'name'=>'receiving_calculate_average_price',
		'id'=>'receiving_calculate_average_price',
		'value'=>'receiving_calculate_average_price',
		'checked'=>$this->config->item('receiving_calculate_average_price')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_tax_included').':', 'tax_included',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_checkbox(array(
		'name'=>'tax_included',
		'id'=>'tax_included',
		'value'=>'tax_included',
		'checked'=>$this->config->item('tax_included')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom1').':', 'config_custom1',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom1_name',
		'id'=>'custom1_name',
		'value'=>$this->config->item('custom1_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom2').':', 'config_custom2',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom2_name',
		'id'=>'custom2_name',
		'value'=>$this->config->item('custom2_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom3').':', 'config_custom3',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom3_name',
		'id'=>'custom3_name',
		'value'=>$this->config->item('custom3_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom4').':', 'config_custom4',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom4_name',
		'id'=>'custom4_name',
		'value'=>$this->config->item('custom4_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom5').':', 'config_custom5',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom5_name',
		'id'=>'custom5_name',
		'value'=>$this->config->item('custom5_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom6').':', 'config_custom6',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom6_name',
		'id'=>'custom6_name',
		'value'=>$this->config->item('custom6_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom7').':', 'config_custom7',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom7_name',
		'id'=>'custom7_name',
		'value'=>$this->config->item('custom7_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom8').':', 'config_custom8',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom8_name',
		'id'=>'custom8_name',
		'value'=>$this->config->item('custom8_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom9').':', 'config_custom9',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom9_name',
		'id'=>'custom9_name',
		'value'=>$this->config->item('custom9_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_custom10').':', 'config_custom10',array('class'=>'wide')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'custom10_name',
		'id'=>'custom10_name',
		'value'=>$this->config->item('custom10_name')));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('config_backup_database').':', 'config_backup_database',array('class'=>'wide')); ?>
	<div id="backup_db" class="form_field small_button" style="background-color:transparent;">
		<span style="top:22%;"><?php echo $this->lang->line('config_backup_button'); ?></span>
	</div>
</div>


<?php 
echo form_submit(array(
	'name'=>'submit_form',
	'id'=>'submit_form',
	'value'=>$this->lang->line('common_submit'),
	'class'=>'submit_button float_right')
);
?>
</fieldset>
</div>
<?php
echo form_close();
?>

<script type='text/javascript'>

//validation and submit handling
$(document).ready(function()
{
	$("#backup_db").click(function() {
		window.location='<?php echo site_url('config/backup_db') ?>';
	});
	
	$('#config_form').validate({
		submitHandler:function(form)
		{
			$(form).ajaxSubmit({
			success:function(response)
			{
				if(response.success)
				{
					set_feedback(response.message,'success_message',false);		
				}
				else
				{
					set_feedback(response.message,'error_message',true);		
				}
			},
			dataType:'json'
		});

		},
		errorLabelContainer: "#error_message_box",
 		wrapper: "li",
		rules: 
		{
			company: "required",
			address: "required",
    		phone: "required",
    		default_tax_rate:
    		{
    			required:true,
    			number:true
    		},
    		email:"email",
    		return_policy: "required"    		
   		},
		messages: 
		{
     		company: "<?php echo $this->lang->line('config_company_required'); ?>",
     		address: "<?php echo $this->lang->line('config_address_required'); ?>",
     		phone: "<?php echo $this->lang->line('config_phone_required'); ?>",
     		default_tax_rate:
    		{
    			required:"<?php echo $this->lang->line('config_default_tax_rate_required'); ?>",
    			number:"<?php echo $this->lang->line('config_default_tax_rate_number'); ?>"
    		},
     		email: "<?php echo $this->lang->line('common_email_invalid_format'); ?>",
     		return_policy:"<?php echo $this->lang->line('config_return_policy_required'); ?>"
	
		}
	});
});
</script>