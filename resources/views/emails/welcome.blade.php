<div class="email">
    <div class="corp">
        <p>Olá {{ $user->name }},</p>
        <p>Seja bem-vindo ao Fil</p>

        <hr>
        <div class="base">
            <a class="button" href="{{ config('app.site_url') }}/verificar-email?token={{ $user->token }}">
                Verificar E-mail
            </a>
        </div> 
    </div>
</div>




<style>
    .email {
        font-family: Avenir, Helvetica, Arial, Helvetica, sans-serif;
        color: #fff;
        background-color: #e2e2e2;
        min-height: 100vh;
        padding-top: 3rem;
    }

    .corp {
        background-color: #4A4143;
        border-radius: 1rem;
        padding: 2rem 2rem;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
        color: #fff;
        max-width: 400px;
        
    }

    .button {
        background-color: #B05465;
        border-radius: 1rem;
        padding: 20px;
        height: 4px;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
        margin: 4px;
        color: #fff
    }

    .hr {
        margin: 10px
    }

    .h1 {
        text-align: center;
    }

    .h2 {
        margin-bottom: 1rem;
    }

    .base {
        color: #2c3e50
    }
</style>