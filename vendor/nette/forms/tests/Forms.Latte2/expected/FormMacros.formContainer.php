<?php
%A%
		$form = $this->global->formsStack[] = $this->global->uiControl["myForm"];
		Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form, []) /* line 1 */;
		echo '
<table>
	<tr>
		<th>';
		if ($ʟ_label = end($this->global->formsStack)["input1"]->getLabel()) echo $ʟ_label;
		echo '</th>
		<td>';
		echo end($this->global->formsStack)["input1"]->getControl() /* line 5 */;
		echo '</td>
	</tr>
';
		$this->global->formsStack[] = $formContainer = end($this->global->formsStack)["cont1"] /* line 7 */;
		echo '	<tr>
		<th>';
		if ($ʟ_label = end($this->global->formsStack)["input2"]->getLabel()) echo $ʟ_label;
		echo '</th>
		<td>';
		echo end($this->global->formsStack)["input2"]->getControl() /* line 10 */;
		echo '</td>
	</tr>
	<tr>
		<th>';
		if ($ʟ_label = end($this->global->formsStack)["input3"]->getLabel()) echo $ʟ_label;
		echo '</th>
		<td>';
		echo end($this->global->formsStack)["input3"]->getControl() /* line 14 */;
		echo '</td>
	</tr>
	<tr>
		<th>Checkboxes</th>
		<td>
';
		$this->global->formsStack[] = $formContainer = end($this->global->formsStack)["cont2"] /* line 19 */;
		echo '			<ol>
';
		$iterations = 0;
		foreach ($formContainer->controls as $name => $field) /* line 19 */ {
			echo '				<li>';
			$ʟ_input = $_input = is_object($ʟ_tmp = $field) ? $ʟ_tmp : end($this->global->formsStack)[$ʟ_tmp];
			echo $ʟ_input->getControl() /* line 20 */;
			echo '</li>
';
			$iterations++;
		}
		echo '			</ol>
';
		array_pop($this->global->formsStack);
		$formContainer = end($this->global->formsStack);
		echo '		</td>
	</tr>
	<tr>
		<th>';
		if ($ʟ_label = end($this->global->formsStack)["input7"]->getLabel()) echo $ʟ_label;
		echo '</th>
		<td>';
		echo end($this->global->formsStack)["input7"]->getControl() /* line 26 */;
		echo '</td>
	</tr>
';
		array_pop($this->global->formsStack);
		$formContainer = end($this->global->formsStack);
		$this->global->formsStack[] = $formContainer = end($this->global->formsStack)["items"] /* line 29 */;
		echo '	<tr>
		<th>Items</th>
		<td>
';
		$items = array(1, 2, 3) /* line 33 */;
		$iterations = 0;
		foreach ($items as $item) /* line 34 */ {
			if (!isset($formContainer[$item])) /* line 35 */ continue;
			$this->global->formsStack[] = $formContainer = is_object($ʟ_tmp = $item) ? $ʟ_tmp : end($this->global->formsStack)[$ʟ_tmp] /* line 36 */;
			echo '				';
			echo end($this->global->formsStack)["input"]->getControl() /* line 37 */;
			echo "\n";
			array_pop($this->global->formsStack);
			$formContainer = end($this->global->formsStack);
			$iterations++;
		}
		echo '		</td>
	</tr>
';
		array_pop($this->global->formsStack);
		$formContainer = end($this->global->formsStack);
		echo '	<tr>
		<th>';
		if ($ʟ_label = end($this->global->formsStack)["input8"]->getLabel()) echo $ʟ_label;
		echo '</th>
		<td>';
		echo end($this->global->formsStack)["input8"]->getControl() /* line 45 */;
		echo '</td>
	</tr>
</table>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		echo "\n";
%A%
