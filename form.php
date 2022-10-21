<?php
require 'function.php';
if (isset($_POST["submit"])) {

    enkripsi($_POST);

    $list = mysqli_query($conn, "SELECT * FROM data ");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>




    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">

        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="" method="POST">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="asal-kota" class="block text-sm font-medium text-gray-700">Asal Kota</label>
                                <input type="text" name="asal-kota" id="asal-kota" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit" name="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    <div class="mt-5">
        <table class="table-auto mx-auto">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Enkripsi Nama</th>
                    <th>Asal Kota</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $row) : ?>
                    <tr>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['enkripsi'] ?></td>
                        <td><?= $row['kota'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>





</body>

</html>