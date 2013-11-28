<?
class plantilla{
    
	function plantilla($template_file){
		$this->tpl_file = 'templates/' . $template_file;
	}
	function asigna_variables($vars){
		$this->vars= (empty($this->vars)) ? $vars : $this->vars . $vars;
	}
	function muestra(){
		if (!($this->fd = @fopen($this->tpl_file, 'r')))
		{
			sostenedor_error('error al abrir la plantilla ' . $this->tpl_file);
		} else{
			$this->template_file = fread($this->fd, filesize($this->tpl_file));
			fclose($this->fd);
			$this->mihtml = $this->template_file;
			$this->mihtml = str_replace ("'", "\'", $this->mihtml);
			$this->mihtml = preg_replace('#\{([a-z0-9\-_]*?)\}#is', "' . $\\1 . '", $this->mihtml);
			reset ($this->vars);
			while (list($key, $val) = each($this->vars)) 
			{
				$$key = $val;
			}
			eval("\$this->mihtml = '$this->mihtml';");
			reset ($this->vars);
			while (list($key, $val) = each($this->vars)) 
			{
				unset($$key);
			}
			$this->mihtml=str_replace ("\'", "'", $this->mihtml);
			return $this->mihtml;
		}
	}
}
function sostenedor_error($error){
	$miplantilla=new plantilla("error");
	$miplantilla->asigna_variables(array(
		'ERROR' => $error)
	);

	return $miplantilla->muestra();
}
?>
