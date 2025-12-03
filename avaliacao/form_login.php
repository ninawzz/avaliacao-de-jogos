<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(to bottom, #6fb5e4ff, #0c5eaaff, #000000ff);
    }
    .card {
        border-radius: 1rem;
        background: rgba(0,0,0,0.65);
        color: #fff;
        backdrop-filter: blur(6px);
        box-shadow: 0 0 25px rgba(0,153,255,0.25);
    }
    .card-body label {
        color: #fff;
    }
    .btn-cadastrar {
        border-radius: 20px;
        font-weight: 700;
        background: linear-gradient(to right, #000, #46c3e9ff, #b2e0ffff);
        color: #fff !important;
        border: none;
        transition: .4s ease-in-out;
    }
    .btn-volta {
        border-radius: 20px;
        font-weight: 700;
        background: linear-gradient(to right, #000, #023a4bff, #1a679bff);
        color: #fff !important;
        border: none;
        transition: .4s ease-in-out;
    }
    .btn-cadastrar:hover, .btn-volta:hover {
        background: linear-gradient(90deg, #5facff, #185366);
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(90,180,255,0.9);
    }
</style>
</head>

<body>
<section class="vh-80" style="margin-bottom: 10%;margin-top: 5%;">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-xl-10">
        <div class="card">
          <div class="row g-1 ">
            <div class="col-md-6 col-lg-5 d-none d-md-block">

              <img src="imagens/login.png"
                alt="Cadastro" class="img-fluid" style="border-radius: 1rem 1rem 1rem 1rem; max-width: 1075px;" />
            </div>

            <div class="col-md-3 col-lg-4 d-flex align-items-center">
                <div class="card-body p-3"> 

                    <form action="index.php?pg=login" method="post">
                    <div class="d-flex mb-2 pb-1">
                        <span class="h3 fw-bold mb-0">Login</span> 
                    </div>

                  <div class="form-outline mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>

                    <div class="form-outline mb-3">
                    <label for="senha_hash" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha_hash" name="senha_hash" required>
                  </div>

                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn-cadastrar btn-lg w-100">Entrar</button>
                  </div>

                    <a href="index.php" class="btn btn-volta w-100 mb-1 btn-sm">Voltar</a>
                    <a href="index.php?pg=usuario_form" class="text-white w-100 small">Não tem uma conta? Registre-se aqui</a>

                    </form>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</section>

</body>
</html>
