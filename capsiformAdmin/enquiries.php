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
                            <h2 class="text-xl text-center font-semibold text-gray-800">Enquiries Details</h2>
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
                                            NAME
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            EMAIL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                                            CONTACT NO.
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                                            ENQUIRIES MSSG
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                                            ACTIONS
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">1.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Rajpal</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">rajpal@mail.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">9487222324</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">Khamma
                                            Ghani sa</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                    Delete
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">2.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Anandpal</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Anandpal@mail.com
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">7894561230</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">Namstey
                                            Malik</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                    Delete
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">3.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Shekhar</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">shekhar@mail.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">6312457890</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">Or seth
                                            kai hal hai aapro</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                    Delete
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">4.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Sonakshi</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">sonaxi@mail.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">97482423224</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">Khamma
                                            Ghani sa</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                    Delete
                                                </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">5.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">Manohar</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">manohar@mail.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">9366554241</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black text-center">Shubh
                                            Ratri</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="flex item-center justify-center space-x-2">
                                                <button type="submit"
                                                    class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                    Delete
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