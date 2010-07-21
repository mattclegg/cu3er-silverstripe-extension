<?php

class Cu3erPage extends Page {
	public static $db = array(
		'SoundCloudAutoPlay' => "Boolean",
		'SoundCloudLink' => 'Varchar(255)',
				
		'slide_panel_width' => 'Int(900)',
		'slide_panel_height' => 'Int(380)',
		'slide_panel_horizontal_align' => "Enum('left,center,right','left')",
		'slide_panel_vertical_align' => "Enum('top,center,bottom','top')",
		'ui_visibility_time' => 'Int(11)',
		
		'auto_play' => "Boolean",//Check Auto Play
		'auto_play_defaults_symbol' => "Enum('circular,linear','linear')",
		'auto_play_defaults_time' => 'Int(15)',
		'auto_play_defaults_in_time' => 'Decimal(5,2,0.3)',
		'auto_play_defaults_in_delay' => 'Int()',
		'auto_play_x' => 'Int()',
		'auto_play_y' => 'Int()',
		'auto_play_defaults_in_width' => 'Int()',
		'auto_play_defaults_in_height' => 'Int()',
		'auto_play_defaults_rotation' => 'Int()',
		'auto_play_in_alpha' => 'Decimal(5,2,0.5)',
		'auto_play_tint' => 'Varchar',
		'auto_play_scalex' => 'Int(1)',
		'auto_play_scaley' => 'Int(1)',
		'auto_play_defaults_out_time' => 'Decimal(5,2,0.3)',
		'auto_play_defaults_out_delay' => 'Int()',
		'auto_play_out_alpha' => 'Decimal(5,2,0.85)',
		'auto_play_defaults_over_time' => 'Decimal(5,2,0.3)',
		'auto_play_defaults_over_delay' => 'Int()',
		'auto_play_defaults_over_height' => 'Int()',
		'auto_play_over_alpha' => 'Decimal(5,2,0.85)',
		
		
		'preloader_defaults_symbol' => "Enum('circular,linear','linear')",
		'preloader_defaults_in_time' => 'Decimal(5,2,0.3)',
		'preloader_defaults_in_delay' => 'Int()',
		'preloader_x' => 'Int()',
		'preloader_y' => 'Int()',
		'preloader_defaults_width' => 'Int()',
		'preloader_defaults_in_height' => 'Int()',
		'preloader_defaults_rotation' => 'Int()',
		'preloader_in_alpha' => 'Decimal(5,2,0.85)',
		'preloader_tint' => 'Varchar',
		'preloader_scalex' => 'Int(1)',
		'preloader_scaley' => 'Int(1)',
		'preloader_defaults_out_time' => 'Decimal(5,2,0.3)',
		'preloader_defaults_out_delay' => 'Int()',
		'preloader_out_alpha' => 'Decimal(5,2,0.85)',
		
		'description_defaults_round_corners' => 'Varchar',
		'description_defaults_heading_text_size' => 'Int(18)',
		'description_defaults_heading_text_color' => 'Varchar',
		'description_defaults_heading_text_align' => "Enum('left,center,right','left')",
		'description_defaults_heading_text_margin' => 'Varchar',
		'description_defaults_heading_text_leading' => 'Int()',
		'description_defaults_heading_text_letterSpacing' => 'Int()',
		'description_defaults_paragraph_text_size' => 'Int(12)',
		'description_defaults_paragraph_text_color' => 'Varchar',
		'description_defaults_paragraph_text_align' => "Enum('left,center,right','left')",
		'description_defaults_paragraph_text_margin' => 'Varchar',
		'description_defaults_paragraph_text_leading' => 'Int()',
		'description_defaults_paragraph_text_letterSpacing' => 'Int()',
		'description_defaults_in_time' => 'Decimal(5,2,0.3)',
		'description_defaults_in_delay' => 'Int()',
		'description_x' => 'Int()',
		'description_y' => 'Int()',
		'description_defaults_width' => 'Int()',
		'description_defaults_in_height' => 'Int()',
		'description_defaults_rotation' => 'Int()',
		'description_in_alpha' => 'Decimal(5,2,0.5)',
		'description_tint' => 'Varchar',
		'description_scalex' => 'Int(1)',
		'description_scaley' => 'Int(1)',
		'description_defaults_out_time' => 'Decimal(5,2,0.3)',
		'description_defaults_out_delay' => 'Int()',
		'description_out_alpha' => 'Decimal(5,2,0)',
		'description_defaults_over_time' => 'Decimal(5,2,0.3)',
		'description_defaults_over_delay' => 'Int()',
		'description_over_alpha' => 'Decimal(5,2,0.85)',
		
		'prev_button_round_corners' => 'Varchar',
		'prev_button_defaults_in_time' => 'Decimal(5,2,0.3)',
		'prev_button_defaults_in_delay' => 'Int()',
		'prev_button_x' => 'Int()',
		'prev_button_y' => 'Int()',
		'prev_button_defaults_width' => 'Int()',
		'prev_button_defaults_in_height' => 'Int()',
		'prev_button_defaults_rotation' => 'Int()',
		'prev_button_in_alpha' => 'Decimal(5,2,0.85)',
		'prev_button_tint' => 'Varchar',
		'prev_button_scalex' => 'Int(1)',
		'prev_button_scaley' => 'Int(1)',
		'prev_button_defaults_out_time' => 'Decimal(5,2,0.3)',
		'prev_button_defaults_out_delay' => 'Int()',
		'prev_button_out_alpha' => 'Decimal(5,2,0.85)',
		'prev_button_defaults_over_time' => 'Decimal(5,2,0.3)',
		'prev_button_defaults_over_delay' => 'Int()',
		'prev_button_over_alpha' => 'Decimal(5,2,0.85)',
		
		'next_button_round_corners' => 'Varchar',
		'next_button_defaults_in_time' => 'Decimal(5,2,0.3)',
		'next_button_defaults_in_delay' => 'Int()',
		'next_button_x' => 'Int()',
		'next_button_y' => 'Int()',
		'next_button_defaults_width' => 'Int()',
		'next_button_defaults_in_height' => 'Int()',
		'next_button_defaults_rotation' => 'Int()',
		'next_button_in_alpha' => 'Decimal(5,2,0.85)',
		'next_button_tint' => 'Varchar',
		'next_button_scalex' => 'Int(1)',
		'next_button_scaley' => 'Int(1)',
		'next_button_defaults_out_time' => 'Decimal(5,2,0.3)',
		'next_button_defaults_out_delay' => 'Int()',
		'next_button_out_alpha' => 'Decimal(5,2,0.85)',
		'next_button_defaults_over_time' => 'Decimal(5,2,0.3)',
		'next_button_defaults_over_delay' => 'Int()',
		'next_button_over_alpha' => 'Decimal(5,2,0.85)',
		
		'prev_symbol_type' => "Enum('1,2,3,4,5,6,7,8,9,10','1')",
		'prev_symbol_defaults_in_time' => 'Decimal(5,2,0.3)',
		'prev_symbol_defaults_in_delay' => 'Int()',
		'prev_symbol_x' => 'Int()',
		'prev_symbol_y' => 'Int()',
		'prev_symbol_defaults_rotation' => 'Int()',
		'prev_symbol_in_alpha' => 'Decimal(5,2,0.85)',
		'prev_symbol_tint' => 'Varchar',
		'prev_symbol_scalex' => 'Int(1)',
		'prev_symbol_scaley' => 'Int(1)',
		'prev_symbol_defaults_out_time' => 'Decimal(5,2,0.3)',
		'prev_symbol_defaults_out_delay' => 'Int()',
		'prev_symbol_out_alpha' => 'Decimal(5,2,0.85)',
		'prev_symbol_defaults_over_time' => 'Decimal(5,2,0.3)',
		'prev_symbol_defaults_over_delay' => 'Int()',
		'prev_symbol_over_alpha' => 'Decimal(5,2,0.85)',
		
		'next_symbol_type' => "Enum('1,2,3,4,5,6,7,8,9,10','1')",
		'next_symbol_defaults_in_time' => 'Decimal(5,2,0.3)',
		'next_symbol_defaults_in_delay' => 'Int()',
		'next_symbol_x' => 'Int()',
		'next_symbol_y' => 'Int()',
		'next_symbol_defaults_rotation' => 'Int()',
		'next_symbol_in_alpha' => 'Decimal(5,2,0.85)',
		'next_symbol_tint' => 'Varchar',
		'next_symbol_scalex' => 'Int(1)',
		'next_symbol_scaley' => 'Int(1)',
		'next_symbol_defaults_out_time' => 'Decimal(5,2,0.3)',
		'next_symbol_defaults_out_delay' => 'Int()',
		'next_symbol_out_alpha' => 'Decimal(5,2,0.85)',
		'next_symbol_defaults_over_time' => 'Decimal(5,2,0.3)',
		'next_symbol_defaults_over_delay' => 'Int()',
		'next_symbol_over_alpha' => 'Decimal(5,2,0.85)',
		
		'transitions_defaults_num' => 'Int(1)',
		'transitions_defaults_slicing' => "Enum('horizontal,vertical','horizontal')",
		'transitions_defaults_direction' => "Enum('left,right,up,down','left')",
		'transitions_defaults_duration' => 'Decimal(5,2,0.5)',
		'transitions_defaults_delay' => 'Int()',
		'transitions_defaults_shader' => "Enum('none,flat,phong','none')",
		'transitions_defaults_light_position' => 'Varchar',
		'transitions_defaults_cube_colour' => 'Varchar',
		'transitions_defaults_z_multiplier' => 'Int(2)'
	);
	
	static $has_many = array(
		'Slides' => 'Cu3erSlide'	
	);
		
	public static $defaults = array(
		'SoundCloudAutoPlay' => "true"
	);
	
	static $has_one = array (
    	'FlashFont' => 'File'
	);
	
	function onBeforeWrite() {
		if(isset($this->record['SoundCloudLink']) && $this->record['SoundCloudLink']) {
			$this->record['SoundCloudLink'] = urldecode($this->record['SoundCloudLink']);
			$this->record['SoundCloudLink'] = urlencode($this->record['SoundCloudLink']);
		}
		parent::onBeforeWrite();
	}

	public function getCMSFields()
	{
		$f = parent::getCMSFields();
		
		$f->removeByName('HeaderImages');
		$f->removeFieldFromTab("Root.Content.Main","Content");
		//$f->addFieldsToTab("Root.Content.Tweet",new LiteralField("Tweet",'<iframe src="home/tweettweet" height="500" width="100%" /></iframe>' ));
		
		
	
		
		//Page Content
		$f->addFieldsToTab("Root.Content.Content",new HTMLEditorField("Content","Main Content" ));
		
		//Sound Cloud link
		$f->addFieldsToTab("Root.Content.SoundCloud",new HeaderField("SoundCloud","General Settings" ));
		$f->addFieldToTab('Root.Content.SoundCloud', new OptionsetField($name = "SoundCloudAutoPlay",$title = "Auto Play Music?", $source = array("0" => "No","1" => "Yes"),$value = "1"));
		$f->addFieldToTab('Root.Content.SoundCloud', new TextField('SoundCloudLink','Enter the link to the Sound Cloud Song you Want.'));

		/**
		*
		GET DESCRTIPTIONS FROM HERE	
		
		
		//GeneralSettings
		$f->addFieldsToTab("Root.Cu3erSettings",new HeaderField("GeneralSettings","General Settings" ));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('ui_visibility_time','User Interface Visibility Time'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('slide_panel_width','Slideshow Width (same as your images width)'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('slide_panel_height','Slideshow Height (same as your images width)'));
		
		//Button Settings
		$f->addFieldsToTab("Root.Cu3erSettings",new HeaderField("ButtonSettings","Buttons Settings" ));
		$f->addFieldToTab('Root.Cu3erSettings', new DropdownField($name = "button_symbol_type",$title = "Button Symbol Type (Choose from below)", $source = singleton('Cu3erPage')->dbObject('button_symbol_type')->enumValues()));
		$f->addFieldToTab('Root.Cu3erSettings', new LiteralField("ButtonList","<img src='Cu3er/images/navigationsymbols.gif' />"));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('button_symbol_tint','Button Symbol Tint'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('button_alpha','Button Background Alpha'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('prev_button_x','Previous Button x pos.'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('prev_button_y','Previous Button y pos'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('next_button_x','Next Button x pos'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('next_button_y','Next Button y pos'));
		
		
		
		//AutoPlay
		$f->addFieldsToTab("Root.Cu3erSettings",new HeaderField("AutoPlayHeading","Autoplay Settings" ));
		$f->addFieldToTab('Root.Cu3erSettings', new OptionsetField($name = "auto_play",$title = "Auto Play?", $source = array("0" => "No","1" => "Yes"),$value = "1"));
		$f->addFieldToTab('Root.Cu3erSettings', new OptionsetField($name = "auto_play_defaults_symbol",$title = "Auto Play Symbol", $source = singleton('Cu3erPage')->dbObject('auto_play_defaults_symbol')->enumValues()));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('auto_play_defaults_time','Auto Play Default Time'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('auto_play_x','Auto Play x'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('auto_play_y','Auto Play y'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('auto_play_alpha','Auto Play Alpha (0 - 1)'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('auto_play_tint','Auto Play Tint (0xFF0000)'));
		
		//Description Box
		$f->addFieldsToTab("Root.Cu3erSettings",new HeaderField("Description Header","Description Box Settings" ));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField($name = "description_defaults_round_corners",$title = "Description Box Corner Radius (pixels)"));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField($name = "description_height",$title = "Description Box Height (pixels)"));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField($name = "description_width",$title = "Description Box Width (pixels)"));
		
		**/
		
			$FlashFont = new FileIFrameField('FlashFont','Font to embed. If you dont use one then the default will be called. (SWF only)');
			$FlashFont->allowedExtensions = array('swf');

			$FlashFont_validator = new Upload_Validator();
			$FlashFont_validator->setAllowedExtensions(array('swf'));
			$FlashFont->setValidator($FlashFont_validator);
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("slide_panel","Slide Panel"),
			new TextField('slide_panel_width'),
			new TextField('slide_panel_height'),
			new DropdownField('slide_panel_horizontal_align',null, singleton('Cu3erPage')->dbObject('slide_panel_horizontal_align')->enumValues()),	
			new DropdownField('slide_panel_vertical_align',null, singleton('Cu3erPage')->dbObject('slide_panel_vertical_align')->enumValues()),	
			new TextField('ui_visibility_time'),
			$FlashFont
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("auto_play_title","Auto Play"),
			new CheckboxField('auto_play'),
			new DropdownField('auto_play_defaults_symbol',null, singleton('Cu3erPage')->dbObject('auto_play_defaults_symbol')->enumValues()),	
			new TextField('auto_play_defaults_time'),
			new TextField('auto_play_defaults_in_time'),
			new TextField('auto_play_defaults_in_delay'),
			new TextField('auto_play_x'),
			new TextField('auto_play_y'),
			new TextField('auto_play_defaults_in_width'),
			new TextField('auto_play_defaults_in_height'),
			new TextField('auto_play_defaults_rotation'),
			new TextField('auto_play_in_alpha'),
			new TextField('auto_play_tint'),
			new TextField('auto_play_scalex'),
			new TextField('auto_play_scaley'),
			new TextField('auto_play_defaults_out_time'),
			new TextField('auto_play_defaults_out_delay'),
			new TextField('auto_play_out_alpha'),
			new TextField('auto_play_defaults_over_time'),
			new TextField('auto_play_defaults_over_delay'),
			new TextField('auto_play_defaults_over_height'),
			new TextField('auto_play_over_alpha')
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("preloader_defaults","Preloader"),
			new DropdownField('preloader_defaults_symbol',null, singleton('Cu3erPage')->dbObject('preloader_defaults_symbol')->enumValues()),
			new TextField('preloader_defaults_in_time'),
			new TextField('preloader_defaults_in_delay'),
			new TextField('preloader_x'),
			new TextField('preloader_y'),
			new TextField('preloader_defaults_width'),
			new TextField('preloader_defaults_in_height'),
			new TextField('preloader_defaults_rotation'),
			new TextField('preloader_in_alpha'),
			new TextField('preloader_tint'),
			new TextField('preloader_scalex'),
			new TextField('preloader_scaley'),
			new TextField('preloader_defaults_out_time'),
			new TextField('preloader_defaults_out_delay'),
			new TextField('preloader_out_alpha')
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("description_defaults","Description Defaults"),
			new TextField('description_defaults_round_corners'),
			new TextField('description_defaults_heading_text_size'),
			new TextField('description_defaults_heading_text_color'),
			new DropdownField('description_defaults_heading_text_align',null, singleton('Cu3erPage')->dbObject('description_defaults_heading_text_align')->enumValues()),
			new TextField('description_defaults_heading_text_margin'),
			new TextField('description_defaults_heading_text_leading'),
			new TextField('description_defaults_heading_text_letterSpacing'),
			new TextField('description_defaults_paragraph_text_size'),
			new TextField('description_defaults_paragraph_text_color'),
			new DropdownField('description_defaults_paragraph_text_align',null, singleton('Cu3erPage')->dbObject('description_defaults_paragraph_text_align')->enumValues()),
			new TextField('description_defaults_paragraph_text_margin'),
			new TextField('description_defaults_paragraph_text_leading'),
			new TextField('description_defaults_paragraph_text_letterSpacing'),
			new TextField('description_defaults_in_time'),
			new TextField('description_defaults_in_delay'),
			new TextField('description_x'),
			new TextField('description_y'),
			new TextField('description_defaults_width'),
			new TextField('description_defaults_in_height'),
			new TextField('description_defaults_rotation'),
			new TextField('description_in_alpha'),
			new TextField('description_tint'),
			new TextField('description_scalex'),
			new TextField('description_scaley'),
			new TextField('description_defaults_out_time'),
			new TextField('description_defaults_out_delay'),
			new TextField('description_out_alpha'),
			new TextField('description_defaults_over_time'),
			new TextField('description_defaults_over_delay'),
			new TextField('description_over_alpha')
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("prev_button","Previous Button"),
			new TextField('prev_button_round_corners'),
			new TextField('prev_button_defaults_in_time'),
			new TextField('prev_button_defaults_in_delay'),
			new TextField('prev_button_x'),
			new TextField('prev_button_y'),
			new TextField('prev_button_defaults_width'),
			new TextField('prev_button_defaults_in_height'),
			new TextField('prev_button_defaults_rotation'),
			new TextField('prev_button_in_alpha'),
			new TextField('prev_button_tint'),
			new TextField('prev_button_scalex'),
			new TextField('prev_button_scaley'),
			new TextField('prev_button_defaults_out_time'),
			new TextField('prev_button_defaults_out_delay'),
			new TextField('prev_button_out_alpha'),
			new TextField('prev_button_defaults_over_time'),
			new TextField('prev_button_defaults_over_delay'),
			new TextField('prev_button_over_alpha')
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("next_button","Next Button"),
			new TextField('next_button_round_corners'),
			new TextField('next_button_defaults_in_time'),
			new TextField('next_button_defaults_in_delay'),
			new TextField('next_button_x'),
			new TextField('next_button_y'),
			new TextField('next_button_defaults_width'),
			new TextField('next_button_defaults_in_height'),
			new TextField('next_button_defaults_rotation'),
			new TextField('next_button_in_alpha'),
			new TextField('next_button_tint'),
			new TextField('next_button_scalex'),
			new TextField('next_button_scaley'),
			new TextField('next_button_defaults_out_time'),
			new TextField('next_button_defaults_out_delay'),
			new TextField('next_button_out_alpha'),
			new TextField('next_button_defaults_over_time'),
			new TextField('next_button_defaults_over_delay'),
			new TextField('next_button_over_alpha')
		));
		
		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("prev_symbol","Previous Symbol"),
			new DropdownField('prev_symbol_type',null, singleton('Cu3erPage')->dbObject('prev_symbol_type')->enumValues()),
			new TextField('prev_symbol_defaults_in_time'),
			new TextField('prev_symbol_defaults_in_delay'),
			new TextField('prev_symbol_x'),
			new TextField('prev_symbol_y'),
			new TextField('prev_symbol_defaults_rotation'),
			new TextField('prev_symbol_in_alpha'),
			new TextField('prev_symbol_tint'),
			new TextField('prev_symbol_scalex'),
			new TextField('prev_symbol_scaley'),
			new TextField('prev_symbol_defaults_out_time'),
			new TextField('prev_symbol_defaults_out_delay'),
			new TextField('prev_symbol_out_alpha'),
			new TextField('prev_symbol_defaults_over_time'),
			new TextField('prev_symbol_defaults_over_delay'),
			new TextField('prev_symbol_over_alpha')
		));

		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("next_symbol","Next Symbol"),
			new DropdownField('next_symbol_type',null, singleton('Cu3erPage')->dbObject('next_symbol_type')->enumValues()),
			new TextField('next_symbol_defaults_in_time'),
			new TextField('next_symbol_defaults_in_delay'),
			new TextField('next_symbol_x'),
			new TextField('next_symbol_y'),
			new TextField('next_symbol_defaults_rotation'),
			new TextField('next_symbol_in_alpha'),
			new TextField('next_symbol_tint'),
			new TextField('next_symbol_scalex'),
			new TextField('next_symbol_scaley'),
			new TextField('next_symbol_defaults_out_time'),
			new TextField('next_symbol_defaults_out_delay'),
			new TextField('next_symbol_out_alpha'),
			new TextField('next_symbol_defaults_over_time'),
			new TextField('next_symbol_defaults_over_delay'),
			new TextField('next_symbol_over_alpha')
		));		

		$f->addFieldToTab('Root.Cu3erSettings', new CompositeField(
			new HeaderField("transitions","Transitions"),
			new TextField('transitions_defaults_num'),
			new DropdownField('transitions_defaults_slicing',null, singleton('Cu3erPage')->dbObject('transitions_defaults_slicing')->enumValues()),
			new DropdownField('transitions_defaults_direction',null, singleton('Cu3erPage')->dbObject('transitions_defaults_direction')->enumValues()),
			new TextField('transitions_defaults_duration'),
			new TextField('transitions_defaults_delay'),
			new DropdownField('transitions_defaults_shader',null, singleton('Cu3erPage')->dbObject('transitions_defaults_shader')->enumValues()),
			new TextField('transitions_defaults_light_position'),
			new TextField('transitions_defaults_cube_colour'),
			new TextField('transitions_defaults_z_multiplier')
		));
		
		//Add Slides to Main Tab
		$f->addFieldsToTab("Root.Content.Main",new HeaderField("SlidesHeader","Add a Slide Below." ));
		if (class_exists('DataObjectManager'))$a='DataObjectManager'; else $a='ComplexTableField';
		$f->addFieldsToTab("Root.Content.Main", new $a(
			$this,
			'Slides',
			'Cu3erSlide',
			array('Thumbnail'=>"SlideImage",'Heading' => 'Heading','Paragraph' => 'Paragraph'),
			'getCMSFields_forPopup'		
		));
		return $f;
	}

}

class Cu3erPage_Controller extends Controller {
			
	public function init(){
		parent::init();
	}
	
	public function index(){
		$params = Director::urlParams();
		return $this->customise(array(
			'Cu3er' => DataObject::get_by_id('Cu3erPage', (int)$params['ID'])
		))->renderWith('Cu3erXML');	
	}
}

class Cu3erPage_Holder extends Controller{
	function __construct($id=1){
		Requirements::javascript('cu3er-silverstripe-extension/javascript/swfobject.js');
		$dir=Director::absoluteBaseURL()."cu3er-silverstripe-extension/flash/";
		
		if($x=DataObject::get_by_id('Cu3erPage', (int)$id)->FlashFont)
			$font=$x->FlashFont->AbsoluteURL();
		else
			$font="{$dir}miso_font.swf";
		
		$file="{$dir}cu3er.swf";
		
		
		Requirements::customScript("
		var flashvars = {};
		flashvars.font = '{$font}';
		flashvars.xml = '/Cu3erPage_Controller/index/{$id}';
		var attributes = {};
			var attributes = {};
      		attributes.wmode = 'transparent';
      		attributes.id = 'slider';
      		swfobject.embedSWF('{$file}', 'cu3er-container', '940', '340', '9', 'expressInstall.swf', flashvars, attributes);
		");
	}
	
	public function forTemplate(){
		return $this->renderWith("Cu3erContainer");
	}
}