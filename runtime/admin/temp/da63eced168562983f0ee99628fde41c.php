<?php /*a:1:{s:44:"F:\site\ztx\view\admin\field\changeType.html";i:1681751679;}*/ ?>

<!-- ZTX-009，重新调整字段属性设置 -->
<!-- <style> -->
    <!-- .typeTable tr td {padding: 5px;} -->
    <!-- .typeTable tr td:first-child{text-align: right} -->
<!-- </style> -->
<!-- ZTX-009，重新调整字段属性设置 -->
<script>
    // 修改不同`字段类型`的默认值
    $("select[name='setup[fieldtype]']").change(function () {
        var checkValue = $(this).val();
        if (checkValue == 'int' || checkValue == 'tinyint' || checkValue == 'smallint' || checkValue == 'mediumint') {
            $("input[name='setup[default]']").val(0);
        } else {
            $("input[name='setup[default]']").val('');
        }
    });
</script>
<?php switch($type): case "text": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]" value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>标签组</td>
        <td><input type="text" class="form-control" name="setup[group]" value="<?php echo !empty($fieldInfo['setup']['group']) ? htmlentities($fieldInfo['setup']['group']) : ''; ?>"/></td>
    </tr>
</table>
<?php break; case "textarea": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]" value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "radio": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>字符 VARCHAR</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>整数 TINYINT</option>
                <option value="smallint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='smallint' ? 'selected' : ''; ?><?php endif; ?>>整数 SMALLINT</option>
                <option value="mediumint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumint' ? 'selected' : ''; ?><?php endif; ?>>整数 MEDIUMINT</option>
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>整数 INT</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "checkbox": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
     <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>字符 VARCHAR</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>整数 TINYINT</option>
                <option value="smallint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='smallint' ? 'selected' : ''; ?><?php endif; ?>>整数 SMALLINT</option>
                <option value="mediumint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumint' ? 'selected' : ''; ?><?php endif; ?>>整数 MEDIUMINT</option>
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>整数 INT</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "date": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <tr>
        <td>日期格式 <a href="https://www.php.net/manual/zh/function.date.php" target="_blank" title="点击查看php 日期格式"><i class="far fa-question-circle"></i></a></td>
        <td><input type="text" class="form-control" name="setup[format]"
                   value="<?php echo !empty($fieldInfo['setup']['format']) ? htmlentities($fieldInfo['setup']['format']) : 'Y-m-d'; ?>"/></td>
    </tr>
	
	<!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "time": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <tr>
        <td>时间格式 <a href="https://www.php.net/manual/zh/function.date.php" target="_blank" title="点击查看php 日期格式"><i class="far fa-question-circle"></i></a></td>
        <td>
            <input type="text" class="form-control" name="setup[format]"
                   value="<?php echo !empty($fieldInfo['setup']['format']) ? htmlentities($fieldInfo['setup']['format']) : 'H:i:s'; ?>"/>
        </td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "datetime": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <tr>
        <td>日期时间格式</td>
        <td><input type="text" class="form-control" name="setup[format]"
                   value="<?php echo !empty($fieldInfo['setup']['format']) ? htmlentities($fieldInfo['setup']['format']) : 'Y-m-d H:i:s'; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "daterange": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <tr>
        <td>日期格式</td>
        <td><input type="text" class="form-control" name="setup[format]"
                   value="<?php echo !empty($fieldInfo['setup']['format']) ? htmlentities($fieldInfo['setup']['format']) : 'Y-m-d'; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "tag": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
     <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "number": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>步进值</td>
        <td><input type="text" class="form-control" name="setup[step]"
                   value="<?php echo !empty($fieldInfo['setup']['step']) ? htmlentities($fieldInfo['setup']['step']) : '1'; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    
    <tr>
        <td>小数点</td>
        <td><input type="text" class="form-control" name="setup[point]"
                   value="<?php echo !empty($fieldInfo['setup']['point']) ? htmlentities($fieldInfo['setup']['point']) : '0'; ?>"/></td>
    </tr>
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
			<!-- ZTX-008，优化修改字段类型默认值，把decimal提到默认值 -->
			   <option value="decimal" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='decimal' ? 'selected' : ''; ?><?php endif; ?>>decimal</option>
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>tinyint</option>
                <option value="float" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='float' ? 'selected' : ''; ?><?php endif; ?>>float</option>
                <option value="double" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='double' ? 'selected' : ''; ?><?php endif; ?>>double</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "password": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "select": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
     <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
            	<option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>tinyint</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "select2": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
   <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
            	<option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>tinyint</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "linkage": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <tr>
        <td>字段名</td>
        <td><input type="text" class="form-control" name="setup[fields]"
                   value="<?php echo isset($fieldInfo['setup']['fields']) ? htmlentities($fieldInfo['setup']['fields']) : 'id,name,pid'; ?>"/></td>
    </tr>
    <tr>
        <td>级别</td>
        <td><input type="text" class="form-control" name="setup[level]"
                   value="<?php echo isset($fieldInfo['setup']['level']) ? htmlentities($fieldInfo['setup']['level']) : '2'; ?>"/></td>
    </tr>
     <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>tinyint</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; ?>

<!-- 位置编号ZTX-007，增加字段模板“代码编辑器” -->

<?php case "code": ?>
<table class="typeTable" cellpadding="2" cellspacing="1" >
    <tr>
        <td>默认值</td>
        <td><input id="codeEditor" type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
   
    
    <!--  
	form_begin@
	<tr>
        <td>编辑器高度</td>
        <td><input type="text" class="form-control" name="setup[height]"
                   value="<?php echo isset($fieldInfo['setup']['height']) ? htmlentities($fieldInfo['setup']['height']) : '500'; ?>"/></td>
    </tr>
    <tr>
	<tr>
         <td>代码模式</td>
		 <td>
		  <select class="form-control" name="setup[mode]">
                <option value="js" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['mode']=='js' ? 'selected' : ''; ?><?php endif; ?>>js</option>
                <option value="html" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['mode']=='html' ? 'selected' : ''; ?><?php endif; ?>>html</option>
                <option value="css" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['mode']=='css' ? 'selected' : ''; ?><?php endif; ?>>css</option>               
                
            </select>
      </td>
    </tr>
	
	 <tr>
         <td>编辑器主题</td>
        <td><input type="text" class="form-control" name="setup[theme]"
                   value="<?php echo !empty($fieldInfo['setup']['theme']) ? htmlentities($fieldInfo['setup']['theme']) : 'monokai'; ?>"/></td>
    </tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
		
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                 <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
            mode: "html",     // 编辑器语言
            theme: "monokai",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"200px");
    })
</script>
<?php break; ?>

<!-- 位置编号ZTX-007，增加字段模板“代码编辑器” -->

<?php case "image": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>高度限制</td>
        <td><input type="text" class="form-control" name="setup[image_height]"
                   value="<?php echo isset($fieldInfo['setup']['image_height']) ? htmlentities($fieldInfo['setup']['image_height']) : ''; ?>"/>                
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效,单位为px
                </small>
            </td>
                 
    </tr>
   
    <tr>
        <td>宽度限制</td>
        <td><input type="text" class="form-control" name="setup[image_width]"
                   value="<?php echo isset($fieldInfo['setup']['image_width']) ? htmlentities($fieldInfo['setup']['image_width']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效,单位为px
                </small>
                </td>
    </tr>
   
    <tr>
        <td>大小限制</td>
        <td><input type="text" class="form-control" name="setup[image_size]"
                   value="<?php echo isset($fieldInfo['setup']['image_size']) ? htmlentities($fieldInfo['setup']['image_size']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，,单位为KB
                </small></td>
    </tr>
   
    <tr>
        <td>类型限制</td>
        <td><input type="text" class="form-control" name="setup[image_type]"
                   value="<?php echo isset($fieldInfo['setup']['image_type']) ? htmlentities($fieldInfo['setup']['image_type']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，多个类型用逗号隔开
                </small>
                </td>
    </tr>
     <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    
   
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "images": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>高度限制</td>
        <td><input type="text" class="form-control" name="setup[image_height]"
                   value="<?php echo isset($fieldInfo['setup']['image_height']) ? htmlentities($fieldInfo['setup']['image_height']) : ''; ?>"/>                
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效,单位为px
                </small>
            </td>
                 
    </tr>
   
    <tr>
        <td>宽度限制</td>
        <td><input type="text" class="form-control" name="setup[image_width]"
                   value="<?php echo isset($fieldInfo['setup']['image_width']) ? htmlentities($fieldInfo['setup']['image_width']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效,单位为px
                </small>
                </td>
    </tr>
   
    <tr>
        <td>大小限制</td>
        <td><input type="text" class="form-control" name="setup[image_size]"
                   value="<?php echo isset($fieldInfo['setup']['image_size']) ? htmlentities($fieldInfo['setup']['image_size']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，,单位为KB
                </small></td>
    </tr>
   
    <tr>
        <td>类型限制</td>
        <td><input type="text" class="form-control" name="setup[image_type]"
                   value="<?php echo isset($fieldInfo['setup']['image_type']) ? htmlentities($fieldInfo['setup']['image_type']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，多个类型用逗号隔开
                </small>
                </td>
    </tr>
     <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
			<!-- ZTX-008，优化修改字段类型默认值，把text调到默认值 -->
			 <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "file": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
   <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>大小限制</td>
        <td><input type="text" class="form-control" name="setup[image_size]"
                   value="<?php echo isset($fieldInfo['setup']['image_size']) ? htmlentities($fieldInfo['setup']['image_size']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，,单位为KB
                </small></td>
    </tr>
   
    <tr>
        <td>类型限制</td>
        <td><input type="text" class="form-control" name="setup[image_type]"
                   value="<?php echo isset($fieldInfo['setup']['image_type']) ? htmlentities($fieldInfo['setup']['image_type']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，多个类型用逗号隔开
                </small>
                </td>
    </tr>
     <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
   <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "files": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
  <!-- ZTX-N加上前端上传限制 -->
    <tr>
        <td>大小限制</td>
        <td><input type="text" class="form-control" name="setup[image_size]"
                   value="<?php echo isset($fieldInfo['setup']['image_size']) ? htmlentities($fieldInfo['setup']['image_size']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，,单位为KB
                </small></td>
    </tr>
   
    <tr>
        <td>类型限制</td>
        <td><input type="text" class="form-control" name="setup[image_type]"
                   value="<?php echo isset($fieldInfo['setup']['image_type']) ? htmlentities($fieldInfo['setup']['image_type']) : ''; ?>"/>
                   <small class="text-muted">
                    <i class="fa fa-info-circle"></i>仅在前台上传设置中起效，多个类型用逗号隔开
                </small>
                </td>
    </tr>
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
     <!-- ZTX-N加上前端上传限制 -->
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
					<!-- ZTX-008，优化修改字段类型默认值，把text调到默认值 -->
					 <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "editor": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
     <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>高度</td>
        <td><input type="text" class="form-control" name="setup[height]"
                   value="<?php echo !empty($fieldInfo['setup']['height']) ? htmlentities($fieldInfo['setup']['height']) :  ''; ?>"/></td>
    </tr>
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "hidden": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : '0'; ?>"/></td>
    </tr>
    <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="int" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='int' ? 'selected' : ''; ?><?php endif; ?>>int</option>
                <option value="tinyint" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='tinyint' ? 'selected' : ''; ?><?php endif; ?>>tinyint</option>
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
            </select>
        </td>
    </tr>
</table>
<?php break; case "color": ?>
<table class="typeTable" cellpadding="2" cellspacing="1">
    <tr>
        <td>默认值</td>
        <td><input type="text" class="form-control" name="setup[default]"
                   value="<?php echo isset($fieldInfo['setup']['default']) ? htmlentities($fieldInfo['setup']['default']) : ''; ?>"/></td>
    </tr>
   <!--  
	form_begin@
    <tr>
        <td>额外属性</td>
        <td><input type="text" class="form-control" name="setup[extra_attr]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_attr']) ? htmlentities($fieldInfo['setup']['extra_attr']) : ''; ?>"/></td>
    </tr>
	<tr>
        <td>占位符</td>
        <td><input type="text" class="form-control" name="setup[placeholder]"
                   value="<?php echo !empty($fieldInfo['setup']['placeholder']) ? htmlentities($fieldInfo['setup']['placeholder']) : ''; ?>"/></td>
    </tr>
	form_end@
      -->
	
	
	
	 <!--  
	table_begin@
    <tr>
        <td>列css样式</td>
        <td><input type="text" class="form-control" name="setup[extra_class]"
                   value="<?php echo !empty($fieldInfo['setup']['extra_class']) ? htmlentities($fieldInfo['setup']['extra_class']) : ''; ?>"/></td>
    </tr>
	
	
	 table_end@
      -->
    <tr>
        <td>字段类型</td>
        <td>
            <select class="form-control" name="setup[fieldtype]">
                <option value="varchar" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='varchar' ? 'selected' : ''; ?><?php endif; ?>>varchar</option>
                <option value="char" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='char' ? 'selected' : ''; ?><?php endif; ?>>char</option>
                <option value="text" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='text' ? 'selected' : ''; ?><?php endif; ?>>text</option>
                <option value="mediumtext" <?php if($fieldInfo): ?><?php echo $fieldInfo['setup']['fieldtype']=='mediumtext' ? 'selected' : ''; ?><?php endif; ?>>mediumtext</option>
            </select>
        </td>
    </tr>
</table>
<?php break; default: ?>
<?php endswitch; ?>