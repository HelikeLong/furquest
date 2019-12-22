@extends('layouts.web')

@section('title') Fale conosco @endsection
@section('h1')
    <h1>Fale conosco</h1>
    <p>Alguma dúvida, sugestão ou reclamação?</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-4 col-12-xsmall social-medias">
            <ul class="icons">
                <li>
                    <a href="https://fb.com/FurQuestBR" class="icon brands fa-facebook-f">
                        <span class="">FurQuestBR</span>
                    </a>
                </li>
                <li>
                    <a href="https://t.me/FurQuest" class="icon brands fa-telegram">
                        <span class="">@FurQuest</span>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com/watch?v=XMUVxtMb2LA" class="icon brands fa-youtube">
                        <span class="">Youtube FurQuest</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.kickante.com.br/campanhas/furquest-pirates-n-gears" class="icon solid fa-globe">
                        <span class="">Kickante FurQuest</span>
                    </a>
                </li>
            </ul>
        </div>
{{--        <div class="col-8 col-12-xsmall">--}}
{{--            <section>--}}
{{--                <h3>Contato</h3>--}}
{{--                <form method="post" action="{{ route('web.') }}">--}}
{{--                    <div class="row gtr-uniform">--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <label for="name">Nome *</label>--}}
{{--                            <input type="text" name="name" id="name" value="" placeholder="Insira seu nome">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <label for="email">Email *</label>--}}
{{--                            <input type="email" name="email" id="email" value="" placeholder="Insira seu email">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <label for="telegram">Telegram</label>--}}
{{--                            <input type="text" name="telegram" id="telegram" value="" placeholder="Insira seu Telegram">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <label for="celular">Celular</label>--}}
{{--                            <input type="text" name="celular" id="celular" value="" placeholder="Insira seu Celular">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <label for="message">Comentários *</label>--}}
{{--                            <textarea name="message" id="message" placeholder="Insira seus comentários, reclamações, sugestões, latidos etc" rows="3"></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <ul class="actions">--}}
{{--                                <li><input type="submit" value="Enviar contato" class="primary"></li>--}}
{{--                                <li><input type="reset" value="Limpar"></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </section>--}}
{{--        </div>--}}
    </div>
@endsection

@section('css')

@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LeFIckUAAAAAI8KZQkhucrl5SnWrWUpO6DIhsfR"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeFIckUAAAAAI8KZQkhucrl5SnWrWUpO6DIhsfR', {action: 'contact'});
        });
    </script>
@endsection
