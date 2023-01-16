<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-700 ">





<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Employee
                </h3>
                <button id="closeBtn"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="09758480612" required>
                </div>
                <div class="mb-6">
                    <label for="card_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Card Number</label>
                    <input type="text" id="card_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sh-1342" required>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end   p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button id="add"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
            </div>
        </div>
    </div>
</div>



<div class="text-end max-w-2xl mx-auto mt-10 ">
    <!-- Modal toggle -->
    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Add Employee
    </button>
    <div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>


@vite('resources/js/app.js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function showAlert(icon, message){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: icon ,
            title: message,
        })
    }
    $('#add').click(()=>{
        const data = {
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            card_number: $('#card_number').val(),
        }
        $.ajax({
            url : '/',
            type : 'POST',
            dataType : 'json',
            data : data,
            success: function(res){
                if(res.success === true){
                    showAlert('success', 'Employee is added')
                    fetchData();
                    $('#closeBtn').click();
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#card_number').val('');
                }
            },
            error: function(err){
                showAlert('error', err.responseJSON.message);
            }
        })
    })
    function fetchData (){
        $.ajax({
            url : '/employee',
            type : 'GET',
            dataType  : 'json',
            success : (res) =>{
                $('tbody').html('');
                let tbody  = '';
                $.each(res, (index, value)=>{
                    tbody += '<tr class="bg-gray-900 ">'
                    tbody += '<td class="px-6 py-4">' + value.id  + '</td>'
                    tbody += '<td class="px-6 py-4">' + value.name  + '</td>'
                    tbody += '<td class="px-6 py-4">' + value.email  + '</td>'
                    tbody += '<td class="px-6 py-4">' + value.phone  + '</td>'
                    tbody += `<td>    <button onclick=deleteEm(${value.id})  class="bg-red-700 p-1 ">Delete</button> </td>`
                    tbody += '</tr>'
                })
                $('tbody').append(tbody);
            }
        })
    }
    $(document).ready(()=>{
        fetchData();
    })
    function deleteEm(id){
        $.ajax({
            url : '/employee/' + id,
            type : 'DELETE',
            dataType : 'json',
            success : (res) =>{
                if(res.success === true){
                    fetchData();
                }
            }
        })
    }
</script>
</body>
</html>
