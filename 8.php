Laravelda

1. php artisan make:model ModulNomi -mcfs
buyrug'i bilan model, controller, migration, factory va seeder yaratib olaman.

2. routes fayliga resource route ni yozaman (agar CRUD bo'ladigan bo'lsa).
Route::resource('modules', ModulNomiController::class);

3. Model ni field (maydon) larini migratsiya ga va Model ni o'ziga yozaman,
va modelni relation larini bog'lab chiqaman.

4. Test data uchun factory va seeder yarataman. (agar kerak bo'lsa).

5. Controller method larini yozaman.

6. view fayllarni yozaman. (agar html qaytaradigan bo'lsa)

6. Modulga feature testlar yozaman.

....
//  modulni qandayligiga qarab boshqa qo'shimcha amallar ham bajarilishi mumkin,
misol uchun: middleware, queue, schedule


