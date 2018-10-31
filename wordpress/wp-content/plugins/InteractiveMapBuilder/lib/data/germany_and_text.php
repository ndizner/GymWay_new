<?php
	// The map
	$name         = "Example: Map of German Provinces showing html";
	$options      = '{"background_color":"#ffffff","border_color":"#666666","border_width":"0","dataless_regions_color":"#f5f5f5","enable_region_interactivity":"true","height":"300","keep_aspect_ratio":"true","region":"DE","marker_opacity":1,"marker_size":"6","resolution":"provinces","tooltip_enable":"true","tooltip_color":"#000000","tooltip_font_family":"<global-font-name>","tooltip_font_size":"<global-font-size>","width":"auto"}';
	$table        = '[{"location":"DE-RP","latitude":"","longitude":"","color":"#7f7f7f","size":"1","tooltip_title":"Rhineland-Palatinate","tooltip_text":"Capital: Mainz\nPopulation: 4,052,860","click_action_value":"<h3>Rhineland-Palatinate<\/h3>\n<span>This could be a text about Rhineland-Palatinate.<\/span>"},{"location":"DE-NW","latitude":"","longitude":"","color":"#dbdbdb","size":"1","tooltip_title":"North Rhine-Westphalia","tooltip_text":"Capital: D\u00fcsseldorf\nPopulation: 18,033,000","click_action_value":"<h3>North Rhine-Westphalia<\/h3>\n<span>This could be a text about North Rhine-Westphalia.<\/span>"},{"location":"DE-TH","latitude":"","longitude":"","color":"#dbdbdb","size":"1","tooltip_title":"Thuringia","tooltip_text":"Capital: Erfurt\nPopulation: 2,411,387","click_action_value":"<h3>Thuringia<\/h3>\n<span>This could be a text about Thuringia.<\/span>"},{"location":"DE-BW","latitude":"","longitude":"","color":"#dbdbdb","size":"1","tooltip_title":"Baden Wuerttemburg","tooltip_text":"Capital: Stuttgart\nPopulation: 10,739,000","click_action_value":"<h3>Baden Wuerttemburg<\/h3>\n<span>This could be a text about Baden Wuerttemburg.<\/span>"},{"location":"DE-MV","latitude":"","longitude":"","color":"#dbdbdb","size":"1","tooltip_title":"Mecklenburg-Western Pomerania","tooltip_text":"Capital: Schwerin\nPopulation: 1,694,600","click_action_value":"<h3>Mecklenburg-Western Pomerania<\/h3>\n<span>This could be a text about Mecklenburg-Western Pomerania.<\/span>"},{"location":"DE-HE","latitude":"","longitude":"","color":"#3d3d3d","size":"1","tooltip_title":"Hesse","tooltip_text":"Capital: Wiesbaden\nPopulation: 6,077,000","click_action_value":"<h3>Hesse<\/h3>\n<span>This could be a text about Hesse.<\/span>"},{"location":"DE-ST","latitude":"","longitude":"","color":"#3d3d3d","size":"1","tooltip_title":"Saxony Anhalt","tooltip_text":"Capital: Magdeburg\nPopulation: 2,444,000","click_action_value":"<h3>Saxony Anhalt<\/h3>\n<span>This could be a text about Saxony Anhalt.<\/span>"},{"location":"DE-NI","latitude":"","longitude":"","color":"#7f7f7f","size":"1","tooltip_title":"Lower Saxony","tooltip_text":"Capital: Hanover\nPopulation: 8,002,916","click_action_value":"<h3>Lower Saxony<\/h3>\n<span>This could be a text about Lower Saxony.<\/span>"},{"location":"DE-SH","latitude":"","longitude":"","color":"#3d3d3d","size":"1","tooltip_title":"Schleswig Holstein","tooltip_text":"Capital: Kiel\nPopulation: 2,834,305","click_action_value":"<h3>Schleswig Holstein<\/h3>\n<span>This could be a text about Schleswig Holstein.<\/span>"},{"location":"DE-BY","latitude":"","longitude":"","color":"#7f7f7f","size":"1","tooltip_title":"Bavaria","tooltip_text":"Capital: Munich\nPopulation: 12,519,571","click_action_value":"<h3>Bavaria<\/h3>\n<span>This could be a text about Bavaria.<\/span>"},{"location":"DE-SN","latitude":"","longitude":"","color":"#eaeaea","size":"1","tooltip_title":"The Free State of Saxony","tooltip_text":"Capital: Dresden\nPopulation: 4,192,700","click_action_value":"<h3>The Free State of Saxony<\/h3>\n<span>This could be a text about the Free State of Saxony.<\/span>"},{"location":"DE-BB","latitude":"","longitude":"","color":"#a3a3a3","size":"1","tooltip_title":"Brandenburg","tooltip_text":"Capital: Potsdam\nPopulation: 2,548,200","click_action_value":"<h3>Brandenburg<\/h3>\n<span>This could be a text about Brandenburg.<\/span>"},{"location":"DE-SL","latitude":"","longitude":"","color":"#bababa","size":"1","tooltip_title":"Saarland","tooltip_text":"Capital: Saarbr\u00fccken\nPopulation: 1,014,000","click_action_value":"<h3>Saarland<\/h3>\n<span>This could be a text about Saarland.<\/span>"},{"location":"DE-BE","latitude":"","longitude":"","color":"#d6d6d6","size":"1","tooltip_title":"Berlin","tooltip_text":"Capital: Berlin\nPopulation: 3,400,000","click_action_value":"<h3>Berlin<\/h3>\n<span>This could be a text about Berlin.<\/span>"},{"location":"DE-HH","latitude":"","longitude":"","color":"#e2e2e2","size":"1","tooltip_title":"Free and Hanseatic City of Hamburg","tooltip_text":"Capital: Hamburg\nPopulation: 1,754,317","click_action_value":"<h3>Lower Saxony<\/h3>\n<span>This could be a text about the Free and Hanseatic City of Hamburg.<\/span>"},{"location":"DE-HB","latitude":"","longitude":"","color":"#e0e0e0","size":"1","tooltip_title":"Free Hanseatic City of Bremen","tooltip_text":"Capital: Bremen\nPopulation: 664,000","click_action_value":"<h3>Free Hanseatic City of Bremen<\/h3>\n<span>This could be a text about the Free Hanseatic City of Bremen.<\/span>"}]';
	$display_mode = "regions";
	$picture      = 'data:image/png;base64,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';
	$map          = new Interactive_Map(-1, $name, "", $options, $table, $display_mode, "", "", "", -1, $picture);
	
	// The click action
	$click_action_name = "Show html";
	$click_action_desc = 'This template allows to show HTML below the map. The click value can contain any valid HTML.';
	$click_tab_1 = '<h3>This is Germany.</h3>
<table>
<tr>
<th>Population</th>
<td>80,585,700</td>
</tr>
<tr>
<th>Capital</th>
<td>Berlin</td>
</tr>
</table>';
	$click_tab_2 = '<h3>This is Spain.</h3>
<table>
<tr>
<th>Population</th>
<td>46,704,314</td>
</tr>
<tr>
<th>Capital</th>
<td>Madrid</td>
</tr>
</table>';
	$click_tab_3 = '<h3>This is Spain.</h3>
<table>
<tr>
<th>Population</th>
<td>59,943,933</td>
</tr>
<tr>
<th>Capital</th>
<td>Rome</td>
</tr>
</table>';
	$html = '<div id="{cssid}">
  %%map%%
  <div class="value">
    Click on the map!
  </div>
</div>';
	$javascript = 'jQuery("#" + cssid + " .value").html(click_value);';
	$css = '#{cssid} .value table {
 	border-spacing: 0; 
}
#{cssid} .value tr {
 background-color: #efefef;
  margin: 5px;
  padding: 5px;
  border-radius: 5px;
}
#{cssid} .value td {
 	padding: 5px; 
}
#{cssid} .value th {
 font-weight: bold; 
  padding: 5px;
  text-align: left;
}';

	$action = new Click_Action(-1, $click_action_name, $click_action_desc, $click_tab_1, $click_tab_2, $click_tab_3, $html, $javascript, $css);
	
	$action->save();
	$map->set_click_action($action);
	$map->save();
	
?>