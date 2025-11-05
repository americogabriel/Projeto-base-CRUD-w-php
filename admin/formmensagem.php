<div class="container my-5">
    <h2 class="mb-4 text-center">Enviar Mensagem</h2>
    <form method="POST" class="mx-auto" style="max-width: 500px;">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu E-mail" required>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea cols="50" rows="10" class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua Mensagem:" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</div>

