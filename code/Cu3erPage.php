<?php

class Cu3erPage extends Page {
	public static $db = array(
		'SoundCloudAutoPlay' => "Boolean",
		'SoundCloudLink' => 'Varchar(255)',
		'ui_visibility_time' => 'Int(11)',
		'slide_panel_width' => 'Int(900)',
		'slide_panel_height' => 'Int(380)',
		'slide_panel_horizontal_align' => "Enum('left,center,right','left')",
		'slide_panel_vertical_align' => "Enum('top,center,bottom','top')",
		'auto_play' => "Boolean",//Check Auto Play
		'auto_play_defaults_symbol' => "Enum('circular,linear','linear')",
		'auto_play_defaults_time' => "Int(15)",
		'auto_play_x' => 'Varchar',
		'auto_play_y' => 'Varchar',
		"auto_play_tint" => 'Varchar',
		"auto_play_alpha" => 'Varchar',
		'description_defaults_round_corners' => 'Varchar',
		'description_defaults_paragraph_align' => "Enum('left,center,right','center')",
		'description_defaults_heading_margin' => "Enum('left,center,right','center')",
		'description_defaults_paragraph_text_size' => "Int",
		'description_defaults_header_text_size' => "Int",
		'description_defaults_header_text_align' => "Varchar",
		'description_height' => 'Int(100)',
		'description_width' => 'Varchar',
		'button_symbol_type' => "Enum('1,2,3,4,5,6,7,8,9,10','1')",
		'button_alpha' => "Decimal(1,1)",
		'button_symbol_tint' => "Varchar",
	
		'prev_button_x' => 'Varchar',
		'prev_button_y' => 'Varchar',
	
		'Button_tweenOver_tint' => 'Varchar',
		'Button_tweenOver_scaleX' => 'Varchar',
		'Button_tweenOver_scaleY' => 'Varchar',
		'Button_tweenOut_tint' => 'Varchar',
		'Button_round_corners' => 'Varchar',
		
		'description_defaults_heading_text_color' => 'Varchar',
		'description_defaults_paragraph_text_size' => 'Varchar',
		'description_defaults_paragraph_text_color' => 'Varchar',
		'transitions_defaults_slicing' => 'Varchar',
		'transitions_defaults_direction' => 'Varchar',
		'transitions_defaults_duration' => 'Varchar',
		'transitions_defaults_delay' => 'Varchar',
		'transitions_defaults_cube_colour' => 'Varchar',
		
		'next_button_x' => 'Varchar',
		'next_button_y' => 'Varchar'
	);
	
	static $has_many = array(
		'Slides' => 'Cu3erSlide'	
	);
	
	public static $defaults = array(
		'SoundCloudAutoPlay' => "true",
		'description_defaults_paragraph_text_align'=>'center',
		'description_defaults_paragraph_header_align'=>'center',
		'description_defaults_header_text_margin'=>'10,25,15,25',
		'description_defaults_header_text_size'=>'24',
		'description_defaults_paragraph_text_size'=>'center',
		'description_height' => '100',
		'button_alpha' => '0',
		'button_symbol_tint' => '0xFFFFFF',
		'ui_visibility_time' => '10',
		'slide_panel_width' => '900',
		'slide_panel_height' => '380',
		'auto_play' => '1',
		'auto_play_defaults_symbol' => 'linear',
		'auto_play_defaults_time' => '15',
		'description_defaults_round_corners' => '6,6,6,6',
		'description_defaults_heading_margin' => "10,25,15,25",
		'description_defaults_paragraph_text_size' => "18",
		'description_defaults_header_text_size' => "24",
		'description_defaults_header_text_align' => "center",
		'description_defaults_header_text_align' => "center",
		'button_symbol_type' => '1',

		'Button_tweenOver_tint' => '0xFFFFFF',
		'Button_tweenOver_scaleX' => '1.1',
		'Button_tweenOver_scaleY' => '1.1',
		'Button_tweenOut_tint' => '0x000000',
		'Button_round_corners' => '5,5,5,5'
	
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

		//GeneralSettings
		$f->addFieldsToTab("Root.Cu3erSettings",new HeaderField("GeneralSettings","General Settings" ));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('ui_visibility_time','User Interface Visibility Time'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('slide_panel_width','Slideshow Width (same as your images width)'));
		$f->addFieldToTab('Root.Cu3erSettings', new TextField('slide_panel_height','Slideshow Height (same as your images width)'));
		
      $FlashFont = new FileIFrameField('FlashFont','Font to embed. If you dont use one then the default will be called. (SWF only)');
      $FlashFont->allowedExtensions = array('swf');
      
      $FlashFont_validator = new Upload_Validator();
      $FlashFont_validator->setAllowedExtensions(array('swf'));
      $FlashFont->setValidator($FlashFont_validator);
    
		$f->addFieldToTab('Root.Cu3erSettings', $FlashFont);
		
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