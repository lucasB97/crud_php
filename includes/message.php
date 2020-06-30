<?php
  session_start();
  if(isset($_SESSION['mensagem'])){ ?>

  <script>
   //window.onload serve para carregar a função toasts depois que a página for carregada
     window.onload = function() {
       M.toast({html: "<?php echo $_SESSION['mensagem']; ?>"});
    }
  </script>

<?php
  }
  session_unset();//limpa a sessão
?>