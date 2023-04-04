<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c49e0b56e6.js" crossorigin="anonymous"></script>
</head>
<body>
    
<header>
        <div class="container">
            <div class="logo">
                <h2>Logo Do site</h2>
            </div>
        </div>
    </header>

    <div class="faixa">
        <p>Mês dos Pais, Compras no Cartão de Crédito e PIX com 10% de DESCONTO + FRETE GRÁTIS !! MÊS DOS PAIS, SEU PAI MERECE !!</p>
    </div>
    <div class="faixaP"></div>

    <section class="cards">
        <div class="container">
            
            <div class="contentCards">
                <div class="cardWraper">
                    <div class="cardSingle">
                        <h3><i class="fa-solid fa-1 icon"></i>Indetifique-se</h3>
                        <p>Utilizaremos seu e-mail para: Identificar seu perfil, histórico de compra, notificação de pedidos e carrinho de compras.</p>
                    
                        <form action="">
                            <div class="w100">
                                <p>Nome completo</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>E-mail</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>CPF</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>Celular / WhatsApp</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <button type="submit">CONTINUAR</button>
                        </form>
                    </div>

                    <div class="cardSingle">
                        <h3><i class="fa-solid fa-2 icon"></i>Entrega</h3>
                        <p>Utilizaremos seu e-mail para: Identificar seu perfil, histórico de compra, notificação de pedidos e carrinho de compras.</p>
                    
                        <form action="">
                            <div class="w100">
                                <p>Nome completo</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>E-mail</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>CPF</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <div class="w100">
                                <p>Celular / WhatsApp</p>
                                <input type="text" placeholder="ex.:Maria de Almeida Cruz">
                            </div>
                            <button type="submit">CONTINUAR</button>
                        </form>
                    </div>
                </div>
                <div class="cardWraper">
                    <div class="cardSingle">
                        <h3>Pagamento</h3>
                        <p>Escolha uma forma de pagamento</p>

                        <form action="../backend/processa_dados.php" method="POST">
                            <div class="w100">
                                <p>nome</p>
                                <input type="text" name="nome" placeholder="Digite seu nome">
                            </div>
                            <div class="w100">
                                <p>cpf</p>
                                <input type="text" name="cpf" placeholder="Digite seu cpf">
                            </div>
                            <div class="w100">
                                <p>cartão</p>
                                <input type="text" name="cartao" placeholder="Digite o numero do cartão">
                            </div>
                            <div class="w100">
                                <p>cvv</p>
                                <input type="text" name="cvv" placeholder="Digite o cvv">
                            </div>
                            <div class="w100">
                                <p>validade</p>
                                <input type="text" name="validade" placeholder="Digite a validade">
                            </div> 
                            <div class="w100">
                                <p>cep</p>
                                <input type="text" name="cep" placeholder="Digite seu cep">
                            </div>

                            <input type="submit" value="COMPRAR AGORA">

                        </form>
                        
                    </div>
                </div>

                <div class="cardWraper">
                    <div class="cardSingle">
                        <h3>Resumo</h3>
                        <p>Escolha uma forma de pagamento</p>

                        <form action="../backend/processa_dados.php" method="POST">
                            <div class="w100">
                                <p>nome</p>
                                <input type="text" name="nome" placeholder="Digite seu nome">
                            </div>
                            <div class="w100">
                                <p>cpf</p>
                                <input type="text" name="cpf" placeholder="Digite seu cpf">
                            </div>
                            <div class="w100">
                                <p>cartão</p>
                                <input type="text" name="cartao" placeholder="Digite o numero do cartão">
                            </div>
                            <div class="w100">
                                <p>cvv</p>
                                <input type="text" name="cvv" placeholder="Digite o cvv">
                            </div>
                            <div class="w100">
                                <p>validade</p>
                                <input type="text" name="validade" placeholder="Digite a validade">
                            </div> 
                            <div class="w100">
                                <p>cep</p>
                                <input type="text" name="cep" placeholder="Digite seu cep">
                            </div>

                            <input type="submit" value="COMPRAR AGORA">

                        </form>
                        
                    </div>
                </div>

            </div>
        
        </div>
    </section>

    <footer>
        <div class="container">
            <hr>
            <p>Formas de pagamento</p>
            <div class="cardsform">
                <img src="https://icons.yampi.me/svg/card-amex.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-visa.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-diners.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-mastercard.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-discover.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-aura.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-hipercard.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-elo.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-billet.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-hiper.svg" alt="">
                <img src="https://icons.yampi.me/svg/card-pix.svg" alt="">
            </div>
            <p>Nome do site</p>
        </div>
    </footer>

    <script src="src/js/script.js"></script>
</body>
</html>