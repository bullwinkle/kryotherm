<?
$html .= '<script type="text/javascript">
	window.kryotherm || (window.kryotherm = {});
	window.kryotherm.cart =' . json_encode($array) . '
	window.kryotherm.customer =' . json_encode($customer) . '
</script>';

$html .= '<br /><h2>���� ������:</h2>
<!--<form class="js-place-order-form" name="order_form" action="/cart.php&exec_order=send" method="post"> -->
<form class="js-place-order-form" name="place-order" method="post" action="http://193.200.10.117:8080/cgi-bin/cgi_link">
	<table width="60%" class="order_form">

<!-- ------------------------------------ DATA ABOUT CUSTOMER ------------------------------------- -->

		<tr>
			<td width="30%">��������:</td>
			<td><select size="1" name="customer" onChange="define_customer(this.value)">
					<option value="1" ' . (($customer == 1) ? 'selected' : '') . '>���������� ����</option>
					<option value="2" ' . (($customer == 2) ? 'selected' : '') . '>����������� ����</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>������ ��������:</td>
			<td><select size="1" name="shipping">
					<option value=""> --- </option>
					<option value="����-��������">����-��������</option>
					<option value="����������">����������</option>
					<option value="������������">������������</option>
					<option value="����� ������">����� ������</option>
					<option value="���������">���������</option>
					<option value="������">������</option>
				</select>
			</td>
		</tr>
		' . (($customer == '1') ? '
		<tr>
			<td>���: <span class="active">*</span></td><td><input name="name" type="text" value=""></td>
		</tr>
		<tr>
			<td>��������:</td><td><input name="patronymic" type="text" value=""></td>
		</tr>
		<tr>
			<td>�������: <span class="active">*</span></td><td><input name="surname" type="text" value=""></td>
		</tr>
		<tr>
			<td>���: <span class="active">*</span></td><td><input name="inn" type="text" value=""></td>
		</tr>
		<tr>
			<td>����� ���������������: <span class="active">*</span></td><td><input name="adres" type="text" value=""></td>
		</tr>
		<tr>
			<td>�������: <span class="active">*</span></td><td><input name="phone" type="text" value=""></td>
		</tr>
		<tr>
			<td>����:</td><td><input name="fax" type="text" value=""></td>
		</tr>
		<tr>
			<td>E-mail: <span class="active">*</span></td><td><input name="mail" type="text" value=""></td>
		</tr>
		' : '
		<tr>
			<td>������ �������� �����������: <span class="active">*</span></td>
			<td><input type="text" value="" name="organisation"></td>
		</tr>
		<tr>
			<td>���: <span class="active">*</span></td>
			<td><input type="text" value="" name="inn"></td>
		</tr>
		<tr>
			<td>���: <span class="active">*</span></td>
			<td><input type="text" value="" name="kpp"></td>
		</tr>
		<tr>
			<td>����:</td>
			<td><input type="text" value="" name="okpo"></td>
		</tr>
		<tr>
			<td>����������� �����: <span class="active">*</span></td>
			<td><input type="text" value="" name="jaddress"></td>
		</tr>
		<tr>
			<td>����������� �����: <span class="active">*</span></td>
			<td><input type="text" value="" name="postaladdress"></td>
		</tr>
		<tr>
			<td>���������� ���������: <span class="active">*</span></td>
			<td><input type="text" value="" name="bank"></td>
		</tr>
		<tr>
			<td>��� ���. ���������: <span class="active">*</span></td>
			<td><input type="text" value="" name="gendir"></td>
		</tr>
		<tr>
			<td>���������� ����:</td>
			<td><input type="text" value="" name="contactperson"></td>
		</tr>
		<tr>
			<td>�������: <span class="active">*</span></td>
			<td><input type="text" value="" name="phone"></td>
		</tr>
		<tr>
			<td>Fax:</td>
			<td><input type="text" value="" name="fax"></td>
		</tr>
		<tr>
			<td>Email: <span class="active">*</span></td>
			<td><input type="text" value="" name="mail"></td>
		</tr>
		') . '

<!-- ------------------------------------- DATA ABOUT PAYMENT ------------------------------------- -->

		<tr>
			<td>AMOUNT:</td>
			<td><input name="AMOUNT" id="AMOUNT" type="text" value="20"/></td>
		</tr>
		<tr>
			<td>CURRENCY:</td>
			<td><input name="CURRENCY" id="CURRENCY" type="text" value="RUB"/></td>
		</tr>
		<tr>
			<td>ORDER:</td>
			<td><input name="ORDER" id="ORDER" type="text" value="20141216090746"/></td>
		</tr>
		<tr>
			<td>DESC:</td>
			<td><input name="DESC" id="DESC" type="text" value="Test product"/></td>
		</tr>
		<tr>
			<td>TERMINAL:</td>
			<td><input name="TERMINAL" id="TERMINAL" type="text" value="79036768"/></td>
		</tr>
		<tr>
			<td>TRTYPE:</td>
			<td><input name="TRTYPE" id="TRTYPE" type="text" value="1"/></td>
		</tr>
		<tr>
			<td>MERCH_NAME:</td>
			<td><input name="MERCH_NAME" id="MERCH_NAME" type="text" value="ECOGEN_TECHNOLOGY_TEST"/></td>
		</tr>
		<tr>
			<td>MERCHANT:</td>
			<td><input name="MERCHANT" id="MERCHANT" type="text" value="790367686219999"/></td>
		</tr>
		<tr>
			<td>EMAIL:</td>
			<td><input name="EMAIL" id="EMAIL" type="text" value="developer085@gmail.com"/></td>
		</tr>
		<tr>
			<td>NONCE:</td>
			<td><input name="NONCE" id="NONCE" type="text" value="F2B2DD7E603A7ADA"/></td>
		</tr>
		<tr>
			<td>BACKREF:</td>
			<td><input name="BACKREF" id="BACKREF" type="text" value="http://kryotherm.hol.es/"/></td>
		</tr>
		<tr>
			<td>KEY:</td>
			<td><input name="KEY" id="KEY" type="text" value="C50E41160302E0F5D6D59F1AA3925C45"/></td>
		</tr>
		<tr>
			<td>TIMESTAMP:</td>
			<td><input name="TIMESTAMP" id="TIMESTAMP" type="text" value="20141216090758"/></td>
		</tr>
		<tr>
			<td>MAC_DATA:</td>
			<td><input name="MAC_DATA" id="MAC_DATA" type="text" value=""</td>
		</tr>
		<tr>
			<td>P_SIGN:</td>
			<td><input name="P_SIGN" id="P_SIGN" type="text" value="" /</td>
		</tr>
		<tr>
			<td>LANG:</td>
			<td><input name="LANG" id="LANG" type="text" value=""/></td>
		</tr>
		<tr>
			<td>SERVICE:</td>
			<td><input name="SERVICE" id="SERVICE" type="text" value=""/></td>
		</tr>
		<tr>
			<td>����������� ������������:</td>
			<td><textarea name="descript"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" class="vam">
				<span class="active">*</span> &mdash; ���� ������������ ��� ����������.
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="����������� �����"></td>
		</tr>
	</table>
</form>
<br />
';

?>