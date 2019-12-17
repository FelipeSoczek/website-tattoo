@extends('layouts.master')

@section('content')

    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="align-self-top mt-5 ml-5">
                        <h1 class="display-5 font-italic"><br><br>“Eu sou uma tela das minhas experiências, a minha história está gravada em linhas e sombras e pode ser lida nos meus braços, nas minhas pernas, nos meus ombros e na minha barriga.” Kat Von D</h1>

                        <p> Nossas redes:
                            <a href="" class="btn btn-outline-dark">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>

                            <a href="" class="btn btn-outline-dark">
                                <i class="fab fa-instagram"></i>

                            </a>
                        </p>
                    </div>
                </div> <!-- fim textos home -->

                <div class="col-md-6 d-none d-sm-block mt-5"><br>
                    <img src="img/lobo3.png">
                </div>
            </div>
        </div>
    </section> <!-- fim section -->

    

    <section class="caixa" id="servicos"> <!-- inicio sessao -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/art1.png" class="img-fluid">
                    <h4><center>Profissional diplomado</center></h4>
                    <p class="font-italic">
                    Profissional capacitado com certificado em vários cursos, também contando com atenção especial na higiene pré e pós tatuagem.
                    </p>

                </div>

                <div class="col-md-4">
                    <img src="img/art2.png" class="img-fluid">
                    <h4><center>Aquele preço camarada</center></h4>
                    <p class="font-italic">
                    Preço acessível a todos. Você escolhe a forma de pagamento! Aceitamos dinheiro, cheque, video-game usado, eletrodomésticos, por aew vai..
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="img/art3.png" class="img-fluid">
                    <h4><center>Orçamento grátis!</center></h4>
                    <p class="font-italic">
                    Conte-nos qual é a sua ideia, mostre-nos a arte escolhida ou desenvova conosco uma arte do zero!
                    </p>
                </div>
            </div>
        </div>
      </section> <!-- fim da sessao -->



@endsection