<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<% if Cu3er %>
<% control Cu3er %>
<cu3er>
	<settings>
		<general ui_visibility_time="$ui_visibility_time" slide_panel_vertical_align="center" slide_panel_width="$slide_panel_width" slide_panel_height="$slide_panel_height" slide_panel_horizontal_align="center"/>
		
    	<prev_button>
			<defaults round_corners="$Button_round_corners"/>
			<tweenIn alpha="$button_alpha" <% if prev_button_x %> x="$prev_button_x" <% end_if %> <% if prev_button_y %> y="$prev_button_y" <% end_if %> />
			<tweenOver tint="$Bbutton_tweenOver_tint" scaleX="$Button_tweenOver_scaleX" scaleY="$Button_tweenOver_scaleY"/>
			<tweenOut tint="$Button_tweenOut_tint" />
		</prev_button>
		
    	<prev_symbol>
    		<defaults <% if button_symbol_type %> type="$button_symbol_type" <% end_if %> />
    		<tweenIn <% if button_symbol_tint %> type="$button_symbol_tint" <% end_if %>
    		<% if prev_button_x %> x="$prev_button_x" <% end_if %>
			<% if prev_button_y %> y="$prev_button_y" <% end_if %>
			/>
			<tweenOver tint="$Button_tweenOut_tint" />			
		</prev_symbol> 
		
    	<next_button>
			<defaults round_corners="$Button_round_corners"/>			
			<tweenIn alpha="$button_alpha"
			<% if next_button_x %> x="$next_button_x" <% end_if %>
			<% if next_button_y %> y="$next_button_y" <% end_if %>
			/>
			<tweenOver tint="$Bbutton_tweenOver_tint" scaleX="$Button_tweenOver_scaleX" scaleY="$Button_tweenOver_scaleY"/>
			<tweenOut tint="$Button_tweenOut_tint" />
		</next_button>
		
    	<next_symbol>
    		<defaults <% if button_symbol_type %> type="$button_symbol_type" <% end_if %> />
    		<tweenIn 
    		<% if button_symbol_tint %> type="$button_symbol_tint" <% end_if %>  
    		<% if next_button_x %> x="$next_button_x" <% end_if %>
			<% if next_button_y %> y="$next_button_y" <% end_if %>/>
			<tweenOver tint="$Button_tweenOut_tint" />
		</next_symbol>	
	
	<transitions slicing="$transitions_defaults_slicing" direction="$transitions_defaults_direction" duration="$transitions_defaults_duration" delay="$transitions_defaults_delay" cube_color="$transitions_defaults_cube_colour"/>
		
	<description>
          <defaults paragraph_text_align="center" 
          <% if description_defaults_round_corners %> round_corners="$description_defaults_round_corners"<% end_if %>
          <% if description_defaults_paragraph_text_size %> paragraph_text_size="$description_defaults_paragraph_text_size"<% end_if %>
          <% if description_defaults_header_text_align %> heading_text_align="$description_defaults_header_text_align"<% end_if %>
          <% if description_defaults_header_text_size %> heading_text_size="$description_defaults_header_text_size"<% end_if %>
          <% if description_defaults_heading_text_margin %> heading_text_margin="$description_defaults_heading_text_margin"<% end_if %>
          <% if description_defaults_heading_text_size %> heading_text_size="$description_defaults_heading_text_size"<% end_if %>
		  
		  <% if description_defaults_heading_text_color %> heading_text_color="$description_defaults_heading_text_color"<% end_if %>
		  <% if description_defaults_paragraph_text_size %> paragraph_text_size="$description_defaults_paragraph_text_size"<% end_if %>
		  <% if description_defaults_paragraph_text_color %> paragraph_text_color="$description_defaults_paragraph_text_color"<% end_if %>
		    />
          <tweenIn tint="0x222222"
          <% if description_width %> width="$description_width"<% end_if %>
          <% if description_height %> height="$description_height"<% end_if %> 
          x="275" y="50"/>
          <tweenOut alpha="0.5"/>
          <tweenOver alpha="0.5"/>
      </description>
      
	  
      <auto_play>
          <defaults time="$auto_play_defaults_time" symbol="$auto_play_defaults_symbol" />
          <tweenIn 
          <% if auto_play_x %>
          x="$auto_play_x"
          <% end_if %>
          <% if auto_play_y %>
          y="$auto_play_y"
          <% end_if %>
          <% if auto_play_alpha %>
          alpha="$auto_play_alpha"
          <% end_if %>
          <% if auto_play_tint %>
          tint="$auto_play_tint"
          <% end_if %>
          />
          <tweenOut />
          <tweenOver />
      </auto_play>
      
      <preloader>
      <defaults />
      	<tweenIn 
      	<% if preloader_tint %>
          tint="$preloader_tint"
      	<% else %>
      	  tint="0xFFFFFF"
      	  time="0.0"
          <% end_if %> />
          <tweenOut time="0.0" />
 	  </preloader>
	</settings>    

	<slides>
		<% if Slides %><% control Slides %>
        <slide>
        <% if hasSlideLink %>
        	<link target="$SlideLinkTarget">$SlideLink.Link</link>
    	<% end_if %>
            <url>$SlideImage.URL</url>
            <% if hasDescription %>
             <description>
             <% if hasDescriptionLink %><link target="$DescriptionLinkTarget">$DescriptionLink.Link</link><% end_if %>
                <heading>
                $Heading
                </heading>
                <paragraph>
                $Paragraph
                </paragraph>
            </description> 
            <% end_if %>
        </slide>
    
		<!-- changing transition between first & second slide -->
        <transition num="$TransitionNumofSlices" shader="$TransitionShader" 
        <% if TransitionSlicing %> 
        slicing="$TransitionSlicing"
        <% end_if %>
         direction="$TransitionDirection" duration="$TransitionDuration" z_multiplier="$TransitionZmultiplier"/>
        
		<% end_control %><% end_if %>			
	</slides>
</cu3er>
<% end_control %>
<% end_if %>
