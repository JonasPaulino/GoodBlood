$('#btnSair').on('click',function(){
  Swal.fire({
      title: 'Sair?',
      text: "Deseja confirmar o logout no sistema?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim',
      cancelButtonText: 'Não'
      }).then((result) => {
      if (result.isConfirmed) {
          window.location.href = "../../model/exit.php"; 
      } 
      })
})