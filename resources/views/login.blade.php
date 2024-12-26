<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 15px;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .animated {
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

</head>

<body>

    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        
        <form id="login-form">
            <!-- Campo NIT -->
            <div class="form-group">
                <label for="nit">Código NIT</label>
                <input type="text" id="nit" class="form-control" placeholder="Ingrese su NIT" required>
            </div>

            <!-- Campos usuario y contraseña, inicialmente ocultos -->
            <div id="user-pass-fields" class="animated" style="display: none;">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" class="form-control" placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-group position-relative">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required>
                    <span id="password-toggle" class="password-toggle">&#128065;</span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Script personalizado -->
    <script>
        // Mostrar u ocultar la contraseña
        document.getElementById('password-toggle').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });

        // Validar el NIT y mostrar los campos de usuario y contraseña
        document.getElementById('nit').addEventListener('blur', function() {
            const nit = this.value;

            // Simulamos la validación del NIT (puedes hacerlo con una llamada a la API o una consulta a la base de datos)
            if (nit === '1234567890') {  // Reemplaza esto con la lógica de tu backend
                document.getElementById('user-pass-fields').style.display = 'block';
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'NIT no válido',
                    text: 'El código NIT ingresado no es válido. Intente nuevamente.'
                });
            }
        });

        // Enviar el formulario (por ahora solo lo simula)
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Aquí puedes agregar la lógica de autenticación
            Swal.fire({
                icon: 'success',
                title: 'Login Exitoso',
                text: 'Bienvenido de nuevo.'
            });
        });
    </script>

</body>

</html>
