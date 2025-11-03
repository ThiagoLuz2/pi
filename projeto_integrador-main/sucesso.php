<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Cadastro</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2b3c 0%, #2c3e50 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        .header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1a2b3c;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            color: #e6b325;
            margin-right: 10px;
        }
        
        
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }
        
        .status-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            transition: transform 0.3s;
        }
        
        .status-card:hover {
            transform: translateY(-5px);
        }
        
        .icon {
            font-size: 5rem;
            margin-bottom: 20px;
        }
        
        .success .icon {
            color: #2ecc71;
        }
        
        .error .icon {
            color: #e74c3c;
        }
        
        .status-card h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #1a2b3c;
        }
        
        .status-card p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: #555;
        }
        
        .btn {
            display: inline-block;
            background-color: #e6b325;
            color: #1a2b3c;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .btn:hover {
            background-color: #d4a21f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary {
            background-color: #f8f9fa;
            color: #1a2b3c;
            margin-left: 10px;
        }
        
        .btn-secondary:hover {
            background-color: #e9ecef;
        }
        
        
        /* Responsividade */
        @media (max-width: 768px) {
            .status-card {
                padding: 30px 20px;
                margin: 0 15px;
            }
            
            .footer-content {
                flex-direction: column;
            }
            
            .footer-section {
                padding-right: 0;
            }
            
            .btn-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            
            .btn-secondary {
                margin-left: 0;
            }
        }
    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="logo">
                <i class="fas fa-hotel"></i>
                <span>NaHoraDoCheckIn</span>
            </div>
        </div>
    </header>

    
    <div class="main-content">
        <div class="container">
            
            <div class="status-card success">
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1>Cadastro Realizado com Sucesso!</h1>
                <p>Seu cadastro foi concluído com êxito. Em breve você receberá um e-mail de confirmação com os detalhes da sua conta.</p>
                <div class="btn-container">
                    <a href="login.php" class="btn">Fazer Login</a>
                    <a href="index.php" class="btn btn-secondary">Página Inicial</a>
                </div>
            </div>

            
        </div>
    </div>


<?php include 'banco/footer.php'; ?>
</body>
</html>