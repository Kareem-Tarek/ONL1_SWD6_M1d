<?php

namespace App\Models;


use Illuminate\Database\Eloquent\{Factories\HasFactory,SoftDeletes};


use Illuminate\Database\Eloquent\Model;// اللي بنورث منه كل المودلات  model  هنا بنستدعي الكلاس

class Category extends Model
{
    use HasFactory , SoftDeletes; //    هي أداة بتسهل إنشاء بيانات وهمية:asFactory
    //       لتسجيل فيه تريخ المسح  delet_at هذه ميزه بنستخدمها لمسح مواقت مش مسح نهائي بياتم اضافه عامود في قاعده البيانتات اسمه :SoftDeletes
    protected $guarded =[] ;// fillable [] الجزء هذا بيقول اني كل الاعمده في جدول الفئه مسموح التعديل عليها لو كنا عاوزين نمنع هذا علينا كتابه الاعمده بين القوسين
    public function create_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo //هذه الداله بتعرفك من الاخر "مين" اللي عمل إدخال أو إضافة للفئة في قاعدة البيانات.
    {
        return $this->belongsTo(User::class ,'create_user_id');
    }
    public function update_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class ,'update_user_id');
    }

    public function subCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubCategory::class);
    }


}
