<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Editar de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <nav class="bg-blue-400">

        <ul>
            <li class="inline"><a href="../../index.html">Home</a></li>
            <li class="inline"><a href="#">Novo produto</a></li>
            <li class="inline"><a href="form_add_provider.php">Novo fornecedor</a></li>
            <li class="inline"><a href="../Controller/Product.php?operation=list">Listar produtos</a></li>
            <li class="inline"><a href="../Controller/Provider.php?operation=list">Listar Fornecedores</a></li>
        </ul>

    </nav>

    <?php
    session_start();
    $product = $_SESSION['product_info'];
    ?>

    <form action="../controller/Product.php?operation=edit" method="POST">

        <input type="hidden" name="code" value="<?= $product['product_code'] ?>">

        <fieldset class="p-4 m-5 border border-blue-400">

            <legend>Dados do produto</legend>

            <section class="columns-2">

                <article>
                    <label for="name">Nome do produto</label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="5" value="<?= $product['product_name'] ?>">
                </article>

                <article>
                    <label for="sale">Preço de venda</label>
                    <input type="text" id="sale" name="sale" class="border border-blue-400" required min="1" max="1000" value="<?= $product['product_price'] ?>" disabled>
                </article>

            </section>

            <section class="mt-4 columns-2">

                <article>
                    <label for="quantity">Quantidade em estoque</label>
                    <input type="number" id="quantity" name="quantity" class="border border-blue-400" required min="1" max="1000" value="<?= $product['product_quantity'] ?>">
                </article>

                <article>

                    <label for="provider">Fornecedor</label>

                    <select name="provider" id="provider">
                        <option value="1">Fornecedor 1</option>
                        <option value="2">Fornecedor 2</option>
                        <option value="3">Fornecedor 3</option>
                    </select>

                </article>

            </section>

            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Salvar</button>
            </article>

        </fieldset>

    </form>

</body>

</html>