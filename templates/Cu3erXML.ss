<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<% if Cu3er %><% control Cu3er %>
<cu3er>
	<settings>
		<general
			<% if slide_panel_width %>slide_panel_width="$slide_panel_width"<% end_if %>
			<% if slide_panel_height %>slide_panel_height="$slide_panel_height"<% end_if %>
			<% if slide_panel_horizontal_align %>slide_panel_horizontal_align="$slide_panel_horizontal_align"<% end_if %>
			<% if slide_panel_vertical_align %>slide_panel_vertical_align="$slide_panel_vertical_align"<% end_if %>
			<% if ui_visibility_time %>ui_visibility_time="$ui_visibility_time"<% end_if %>
		/>
		<% if auto_play %>
			<auto_play>
	          <defaults
				<% if auto_play_defaults_symbol %>symbol="$auto_play_defaults_symbol"<% end_if %>
				<% if auto_play_defaults_time %>time="$auto_play_defaults_time"<% end_if %>
	          />
	          <tweenIn
			  	<% if auto_play_defaults_in_time %>time="$auto_play_defaults_in_time"<% end_if %>
				<% if auto_play_defaults_in_delay %>delay="$auto_play_defaults_in_delay"<% end_if %>
				<% if auto_play_x %>x="$auto_play_x"<% end_if %>
				<% if auto_play_y %>y="$auto_play_y"<% end_if %>
				<% if auto_play_defaults_in_width %>width="$auto_play_defaults_in_width"<% end_if %>
				<% if auto_play_defaults_in_height %>height="$auto_play_defaults_in_height"<% end_if %>
				<% if auto_play_defaults_rotation %>rotation="$auto_play_defaults_rotation"<% end_if %>
				<% if auto_play_in_alpha %>alpha="$auto_play_in_alpha"<% end_if %>
				<% if auto_play_tint %>tint="$auto_play_tint"<% end_if %>
				<% if auto_play_scalex %>scalex="$auto_play_scalex"<% end_if %>
				<% if auto_play_scaley %>scaley="$auto_play_scaley"<% end_if %>
	          />
			  <tweenOut
			  	<% if auto_play_defaults_out_time %>time="$auto_play_defaults_out_time"<% end_if %>
				<% if auto_play_defaults_out_delay %>delay="$auto_play_defaults_out_delay"<% end_if %>
				<% if auto_play_out_alpha %>alpha="$auto_play_out_alpha"<% end_if %>
	          />
			  <tweenOver
			  	<% if auto_play_defaults_over_time %>time="$auto_play_defaults_over_time"<% end_if %>
				<% if auto_play_defaults_over_delay %>delay="$auto_play_defaults_over_delay"<% end_if %>
				<% if auto_play_defaults_over_height %>height="$auto_play_defaults_over_height"<% end_if %>
				<% if auto_play_over_alpha %>alpha="$auto_play_over_alpha"<% end_if %>
	          />
			</auto_play>
		<% end_if %>
		
		<preloader>
          <defaults
		  	<% if preloader_defaults_symbol %>symbol="$preloader_defaults_symbol"<% end_if %>
          />
          <tweenIn
		  	<% if preloader_defaults_in_time %>time="$preloader_defaults_in_time"<% end_if %>
			<% if preloader_defaults_in_delay %>delay="$preloader_defaults_in_delay"<% end_if %>
			<% if preloader_x %>x="$preloader_x"<% end_if %>
			<% if preloader_y %>y="$preloader_y"<% end_if %>
			<% if preloader_defaults_width %>width="$preloader_defaults_width"<% end_if %>
			<% if preloader_defaults_in_height %>height="$preloader_defaults_in_height"<% end_if %>
			<% if preloader_defaults_rotation %>rotation="$preloader_defaults_rotation"<% end_if %>
			<% if preloader_in_alpha %>alpha="$preloader_in_alpha"<% end_if %>
			<% if preloader_tint %>tint="$preloader_tint"<% end_if %>
			<% if preloader_scalex %>scalex="$preloader_scalex"<% end_if %>
			<% if preloader_scaley %>scaley="$preloader_scaley"<% end_if %>
          />
		  <tweenOut
		  	<% if preloader_defaults_out_time %>time="$preloader_defaults_out_time"<% end_if %>
			<% if preloader_defaults_out_delay %>delay="$preloader_defaults_out_delay"<% end_if %>
			<% if preloader_out_alpha %>alpha="$preloader_out_alpha"<% end_if %>
          />
		</preloader>
		
		<description>
          <defaults
		  	<% if description_defaults_round_corners %>round_corners="$description_defaults_round_corners"<% end_if %>
			<% if description_defaults_heading_text_size %>heading_text_size="$description_defaults_heading_text_size"<% end_if %>
			<% if description_defaults_heading_text_color %>heading_text_color="$description_defaults_heading_text_color"<% end_if %>
			<% if description_defaults_heading_text_align %>heading_text_align="$description_defaults_heading_text_align"<% end_if %>
			<% if description_defaults_heading_text_margin %>heading_text_margin="$description_defaults_heading_text_margin"<% end_if %>
			<% if description_defaults_heading_text_leading %>heading_text_leading="$description_defaults_heading_text_leading"<% end_if %>
			<% if description_defaults_heading_text_letterSpacing %>heading_text_letterSpacing="$description_defaults_heading_text_letterSpacing"<% end_if %>
			<% if description_defaults_paragraph_text_size %>paragraph_text_size="$description_defaults_paragraph_text_size"<% end_if %>
			<% if description_defaults_paragraph_text_color %>paragraph_text_color="$description_defaults_paragraph_text_color"<% end_if %>
			<% if description_defaults_paragraph_text_align %>paragraph_text_align="$description_defaults_paragraph_text_align"<% end_if %>
			<% if description_defaults_paragraph_text_margin %>paragraph_text_margin="$description_defaults_paragraph_text_margin"<% end_if %>
			<% if description_defaults_paragraph_text_leading %>paragraph_text_leading="$description_defaults_paragraph_text_leading"<% end_if %>
			<% if description_defaults_paragraph_text_letterSpacing %>paragraph_text_letterSpacing="$description_defaults_paragraph_text_letterSpacing"<% end_if %>
		  />
          <tweenIn
		  	<% if description_defaults_in_time %>time="$description_defaults_in_time"<% end_if %>
			<% if description_defaults_in_delay %>delay="$description_defaults_in_delay"<% end_if %>
			<% if description_x %>x="$description_x"<% end_if %>
			<% if description_y %>y="$description_y"<% end_if %>
			<% if description_defaults_width %>width="$description_defaults_width"<% end_if %>
			<% if description_defaults_in_height %>height="$description_defaults_in_height"<% end_if %>
			<% if description_defaults_rotation %>rotation="$description_defaults_rotation"<% end_if %>
			<% if description_in_alpha %>alpha="$description_in_alpha"<% end_if %>
			<% if description_tint %>tint="$description_tint"<% end_if %>
			<% if description_scalex %>scalex="$description_scalex"<% end_if %>
			<% if description_scaley %>scaley="$description_scaley"<% end_if %>
          />
		  <tweenOut
		  	<% if description_defaults_out_time %>time="$description_defaults_out_time"<% end_if %>
			<% if description_defaults_out_delay %>delay="$description_defaults_out_delay"<% end_if %>
			<% if description_out_alpha %>alpha="$description_out_alpha"<% end_if %>
          />
		  <tweenOver
		  	<% if description_defaults_over_time %>time="$description_defaults_over_time"<% end_if %>
			<% if description_defaults_over_delay %>delay="$description_defaults_over_delay"<% end_if %>
			<% if description_over_alpha %>alpha="$description_over_alpha"<% end_if %>
          />
		</description>
		
		<prev_button>
          <defaults
		  	<% if prev_button_round_corners %>round_corners="$prev_button_round_corners"<% end_if %>
          />
          <tweenIn
		  	<% if prev_button_defaults_in_time %>time="$prev_button_defaults_in_time"<% end_if %>
			<% if prev_button_defaults_in_delay %>delay="$prev_button_defaults_in_delay"<% end_if %>
			<% if prev_button_x %>x="$prev_button_x"<% end_if %>
			<% if prev_button_y %>y="$prev_button_y"<% end_if %>
			<% if prev_button_defaults_width %>width="$prev_button_defaults_width"<% end_if %>
			<% if prev_button_defaults_in_height %>height="$prev_button_defaults_in_height"<% end_if %>
			<% if prev_button_defaults_rotation %>rotation="$prev_button_defaults_rotation"<% end_if %>
			<% if prev_button_in_alpha %>alpha="$prev_button_in_alpha"<% end_if %>
			<% if prev_button_tint %>tint="$prev_button_tint"<% end_if %>
			<% if prev_button_scalex %>scalex="$prev_button_scalex"<% end_if %>
			<% if prev_button_scaley %>scaley="$prev_button_scaley"<% end_if %>
          />
		  <tweenOut
		  	<% if prev_button_defaults_out_time %>time="$prev_button_defaults_out_time"<% end_if %>
			<% if prev_button_defaults_out_delay %>delay="$prev_button_defaults_out_delay"<% end_if %>
			<% if prev_button_out_alpha %>alpha="$prev_button_out_alpha"<% end_if %>
          />
		  <tweenOver
		  	<% if prev_button_defaults_over_time %>time="$prev_button_defaults_over_time"<% end_if %>
			<% if prev_button_defaults_over_delay %>delay="$prev_button_defaults_over_delay"<% end_if %>
			<% if prev_button_over_alpha %>alpha="$prev_button_over_alpha"<% end_if %>
          />
		</prev_button>
		
		<next_button>
          <defaults
		  	<% if next_button_round_corners %>round_corners="$next_button_round_corners"<% end_if %>
          />
          <tweenIn
		  	<% if next_button_defaults_in_time %>time="$next_button_defaults_in_time"<% end_if %>
			<% if next_button_defaults_in_delay %>delay="$next_button_defaults_in_delay"<% end_if %>
			<% if next_button_x %>x="$next_button_x"<% end_if %>
			<% if next_button_y %>y="$next_button_y"<% end_if %>
			<% if next_button_defaults_width %>width="$next_button_defaults_width"<% end_if %>
			<% if next_button_defaults_in_height %>height="$next_button_defaults_in_height"<% end_if %>
			<% if next_button_defaults_rotation %>rotation="$next_button_defaults_rotation"<% end_if %>
			<% if next_button_in_alpha %>alpha="$next_button_in_alpha"<% end_if %>
			<% if next_button_tint %>tint="$next_button_tint"<% end_if %>
			<% if next_button_scalex %>scalex="$next_button_scalex"<% end_if %>
			<% if next_button_scaley %>scaley="$next_button_scaley"<% end_if %>
          />
		  <tweenOut
			<% if next_button_defaults_out_time %>time="$next_button_defaults_out_time"<% end_if %>
			<% if next_button_defaults_out_delay %>delay="$next_button_defaults_out_delay"<% end_if %>
			<% if next_button_out_alpha %>alpha="$next_button_out_alpha"<% end_if %>
          />
		  <tweenOver
		  	<% if next_button_defaults_over_time %>time="$next_button_defaults_over_time"<% end_if %>
			<% if next_button_defaults_over_delay %>delay="$next_button_defaults_over_delay"<% end_if %>
			<% if next_button_over_alpha %>alpha="$next_button_over_alpha"<% end_if %>
          />
		</next_button>
		
		<prev_symbol>
          <defaults
		  	<% if prev_symbol_type %>type="$prev_symbol_type"<% end_if %>
          />
          <tweenIn
		  	<% if prev_symbol_defaults_in_time %>time="$prev_symbol_defaults_in_time"<% end_if %>
			<% if prev_symbol_defaults_in_delay %>delay="$prev_symbol_defaults_in_delay"<% end_if %>
			<% if prev_symbol_x %>x="$prev_symbol_x"<% end_if %>
			<% if prev_symbol_y %>y="$prev_symbol_y"<% end_if %>
			<% if prev_symbol_defaults_rotation %>rotation="$prev_symbol_defaults_rotation"<% end_if %>
			<% if prev_symbol_in_alpha %>alpha="$prev_symbol_in_alpha"<% end_if %>
			<% if prev_symbol_tint %>tint="$prev_symbol_tint"<% end_if %>
			<% if prev_symbol_scalex %>scalex="$prev_symbol_scalex"<% end_if %>
			<% if prev_symbol_scaley %>scaley="$prev_symbol_scaley"<% end_if %>
          />
		  <tweenOut
          	<% if prev_symbol_defaults_out_time %>time="$prev_symbol_defaults_out_time"<% end_if %>
			<% if prev_symbol_defaults_out_delay %>delay="$prev_symbol_defaults_out_delay"<% end_if %>
			<% if prev_symbol_out_alpha %>alpha="$prev_symbol_out_alpha"<% end_if %>
          />
		  <tweenOver
		  	<% if prev_symbol_defaults_over_time %>time="$prev_symbol_defaults_over_time"<% end_if %>
			<% if prev_symbol_defaults_over_delay %>delay="$prev_symbol_defaults_over_delay"<% end_if %>
			<% if prev_symbol_over_alpha %>alpha="$prev_symbol_over_alpha"<% end_if %>
          />
		</prev_symbol>
		
		<next_symbol>
          <defaults
		  	<% if next_symbol_type %>type="$next_symbol_type"<% end_if %>
          />
          <tweenIn
		  	<% if next_symbol_defaults_in_time %>time="$next_symbol_defaults_in_time"<% end_if %>
			<% if next_symbol_defaults_in_delay %>delay="$next_symbol_defaults_in_delay"<% end_if %>
			<% if next_symbol_x %>x="$next_symbol_x"<% end_if %>
			<% if next_symbol_y %>y="$next_symbol_y"<% end_if %>
			<% if next_symbol_defaults_rotation %>rotation="$next_symbol_defaults_rotation"<% end_if %>
			<% if next_symbol_in_alpha %>alpha="$next_symbol_in_alpha"<% end_if %>
			<% if next_symbol_tint %>tint="$next_symbol_tint"<% end_if %>
			<% if next_symbol_scalex %>scalex="$next_symbol_scalex"<% end_if %>
			<% if next_symbol_scaley %>scaley="$next_symbol_scaley"<% end_if %>
          />
		  <tweenOut
		  	<% if next_symbol_defaults_out_time %>time="$next_symbol_defaults_out_time"<% end_if %>
			<% if next_symbol_defaults_out_delay %>delay="$next_symbol_defaults_out_delay"<% end_if %>
			<% if next_symbol_out_alpha %>alpha="$next_symbol_out_alpha"<% end_if %>
          />
		  <tweenOver
		  	<% if next_symbol_defaults_over_time %>time="$next_symbol_defaults_over_time"<% end_if %>
			<% if next_symbol_defaults_over_delay %>delay="$next_symbol_defaults_over_delay"<% end_if %>
			<% if next_symbol_over_alpha %>alpha="$next_symbol_over_alpha"<% end_if %>
          />
		</next_symbol>
		
		<transitions
			<% if transitions_defaults_num %>num="$transitions_defaults_num"<% end_if %>
			<% if transitions_defaults_slicing %>slicing="$transitions_defaults_slicing"<% end_if %>
			<% if transitions_defaults_direction %>direction="$transitions_defaults_direction"<% end_if %>
			<% if transitions_defaults_duration %>duration="$transitions_defaults_duration"<% end_if %>
			<% if transitions_defaults_delay %>delay="$transitions_defaults_delay"<% end_if %>
			<% if transitions_defaults_shader %>shader="$transitions_defaults_shader"<% end_if %>
			<% if transitions_defaults_light_position %>light_position="$transitions_defaults_light_position"<% end_if %>
			<% if transitions_defaults_cube_colour %>cube_color="$transitions_defaults_cube_colour"<% end_if %>
			<% if transitions_defaults_z_multiplier %>z_multiplier="$transitions_defaults_z_multiplier"<% end_if %>
		/>
	</settings>

	<slides>
		<% if Slides %><% control Slides %>
        <slide>
        	<url>$SlideImage.URL</url>
        	<% if hasSlideLink %><link target="$SlideLinkTarget">$SlideLink.Link</link><% end_if %>  
            <% if hasDescription %>
             <description>
             	<heading>$Heading</heading>
                <paragraph>$Paragraph</paragraph>
				<% if hasDescriptionLink %><link target="$DescriptionLinkTarget">$DescriptionLink.Link</link><% end_if %>
            </description> 
            <% end_if %>
        </slide>
        <transition
			<% if TransitionNumofSlices %>num="$TransitionNumofSlices"<% end_if %>
			<% if TransitionSlicing %>slicing="$TransitionSlicing"<% end_if %>
			<% if TransitionDirection %>direction="$TransitionDirection"<% end_if %>
			<% if TransitionDuration %>duration="$TransitionDuration"<% end_if %>
			<% if TransitionDelay %>delay="$TransitionDelay"<% end_if %>
			<% if TransitionShader %>shader="$TransitionShader"<% end_if %>
			<% if TransitionLight_position %>light_position="$TransitionLight_position"<% end_if %>
			<% if TransitionCube_color %>cube_color="$TransitionCube_color"<% end_if %>
			<% if TransitionZmultiplier %>z_multiplier="$TransitionZmultiplier"<% end_if %>
		/>
		<% end_control %>
		<% control Slides %>
        <slide>
        	<url>$SlideImage.URL</url>
        	<% if hasSlideLink %><link target="$SlideLinkTarget">$SlideLink.Link</link><% end_if %>  
            <% if hasDescription %>
             <description>
             	<heading>$Heading</heading>
                <paragraph>$Paragraph</paragraph>
				<% if hasDescriptionLink %><link target="$DescriptionLinkTarget">$DescriptionLink.Link</link><% end_if %>
            </description> 
            <% end_if %>
        </slide>
		<% end_control %><% end_if %>			
	</slides>
</cu3er>
<% end_control %>
<% end_if %>