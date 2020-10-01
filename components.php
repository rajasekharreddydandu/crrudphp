<?php
function inputElement($type,$icon,$placeholder,$name,$value){
           $ele="  
			 <div class=\"input-group mb-3\">
				  <div class=\"input-group-prepend\">
					<div class=\"input-group-text bg-warning\" id=\"basic-addon1\">$icon</div>
				  </div>
				  <input type='$type' class=\"form-control\" placeholder='$placeholder' name='$name' value='$value' >
				</div>
";
echo $ele;

}
function buttonElement($styleclass,$btnname,$btnid,$btnvalue,$attr){
	$btn="
    <button type=\"submit\" name='$btnname' '$attr' id='$btnid' class=\"$styleclass\">$btnvalue</button>
	";
	echo $btn;
}

?>