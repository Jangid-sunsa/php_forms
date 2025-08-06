<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsiform Dashboard</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-gray-100 font-sans antialiased">
        <div class="flex h-screen overflow-hidden">
            <?php include('assets/sidebar.inc.php') ?>
            <div class="flex-1 flex flex-col overflow-hidden">
                <?php include('assets/header.inc.php') ?>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 md:p-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl text-center font-semibold text-gray-800">Listening of Products</h2>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            Product Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            Delivery Schedule
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            Payment Type
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                                            Amount
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">1.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Redmi-Note14 Mobile
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">August 9, 2025, 10:30
                                            Am</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Credi Card</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">₹17,999
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-400 text-center">
                                            Pending</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-violet-600 hover:bg-violet-700 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">2.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Iphone 16+
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">August 19, 2025,
                                            10:30
                                            Am</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Cash</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">₹74,999
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 text-center">
                                            Deliverd</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-violet-600 hover:bg-violet-700 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">3.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Women Earing silver
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">August 10, 2025,
                                            10:30
                                            Am</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Credi Card</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">₹999
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800 text-center">
                                            Sent</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-violet-600 hover:bg-violet-700 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">4.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Rakhi(bhai+behan) +2
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">August 9, 2025, 10:30
                                            Am</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Phone Pay</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">₹199
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-400 text-center">
                                            Pending</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-violet-600 hover:bg-violet-700 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">5.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Dell latitute E5470
                                            corei5/8/256
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">August 05, 2025,
                                            03:30
                                            Pm</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Credi Card</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">₹34,999
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 text-center">
                                            Delivered</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-violet-600 hover:bg-violet-700 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-2 py-1 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>