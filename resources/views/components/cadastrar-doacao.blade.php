<div class="d-none" id="page_new_donations"></div>
<div class="d-flex justify-content-center align-items-center" style="height:calc(100vh - 80px);background-image: url(assets/images/img-secundaria.png);background-size: cover;background-repeat: no-repeat;">
    <div class="col-4 bg-white pt-3 pe-4 pb-3 ps-4" style="background-color:#D9D9D9;">
        <form action="/donations" method="post">
            @csrf
            <h4 class="text-center fw-bold mb-3">Cadastrar doação</h4>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="nome">
                    Nome
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="nome" type="text" name="nome" placeholder="Nome" required="required" autofocus="autofocus">
            </div>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="doador">
                    Doador
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="doador" type="text" name="doador" placeholder="Doador" required="required" autofocus="autofocus">
            </div>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="quantidade">
                    Quantidade
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="quantidade" type="number" name="quantidade" placeholder="Quantidade" required="required" autofocus="autofocus">
            </div>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="tipo">
                    Tipo
                </label>
                <select class="form-select" name="tipo" id="tipo">
                    <option value="" selected>Escolha uma opção</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                    Salvar
                </button>
            </div>

        </form>
    </div>
</div>