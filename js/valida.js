<script type="text/javascript">
  function inicio() {
    document.entrar.value="Preencha os campos";
    document.entrar.setAttribute('disabled','true');
  }
  function valida_user(){
    if(document.user.value==""){
      window.alert("Indocumente o usuario!");
    }
  }
  function valida_psw(){
    if(document.psw.value==""){
      alert("Indocumente a senha!");
    }
  }
  function alerta(){
  alert("Funciona!");
  }
</script>
