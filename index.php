<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="antialiased font-sans">
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

            <h2 class="text-3xl mb-10 border-b-2 pb-2">Products</h2>

            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                <?php
                    include_once ("data.php");
                    foreach($products as $product){
                ?>
                    <div class="card group border-2 text-gray-800 p-1">
                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden  bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                            <a href=""><img src="<?php echo $product['image'];?>"
                                class="h-full w-full object-cover object-center group-hover:opacity-75"></a>
                        </div>
                        <div class="card-text">
                            <a href="#"><h3 class="mt-4 text-lg text-gray-700 pb-2"><?php echo $product['name']; ?></h3></a>
                            <div class="card-bottom">
                                <p class="mt-1 text-lg font-medium text-gray-900">$<?php echo $product['price']; ?></p>
                                <button type="button" class="inline-block border-2 px-1 text-gray-800 font-medium text-m leading-tight">
                                    <i class="fa fa-shopping-cart text-lg"></i> add to card
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                }?>
            
            </div>

        </div>
    </div>
</body>

</html>