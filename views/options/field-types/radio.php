

<?php
if ( ! isset($field['select_options']) || $field['select_options'] !== false){
	echo '<option value="-1">'.__('Select Option', 'tutor').'</option>';
}
if ( ! empty($field['options'])){
	foreach ($field['options'] as $optionKey => $option){
		?>
        <p><label>
            <input type="radio" name="tutor_option[<?php echo $field['field_key']; ?>]"  value="<?php echo $optionKey ?>" <?php checked($this->get($field['field_key']),  $optionKey) ?> />
			<?php echo $option ?>
        </label></p>

		<?php
	}
}
?>