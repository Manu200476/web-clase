<div class=" mt-5 mt-lg-0 d-flex align-items-stretch">
    <form role="form">
        <div class="row mt-4">
            <div class="form-group col-md-6">
                <label for="name" class="font-weight-bold">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
        </div>
        <div class="form-group mt-4">
            <label for="subject" class="font-weight-bold">Asunto</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
        </div>
        <div class="form-group mt-4">
            <label for="message" class="font-weight-bold">Mensaje</label>
            <textarea class="form-control" name="message" rows="10" required style="resize: none;"></textarea>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>