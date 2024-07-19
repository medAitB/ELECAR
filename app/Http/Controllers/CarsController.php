<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private static function getData(){
        return [
            ['id' => 1, 'Name' => 'Hyundai Ioniq 5 N', 'Origin' => '01', 'image_url' => '/images/elecar1.png', 'paraghraph' => "“Right now, the Ioniq 5 N is an electric car that's as involving as a really good petrol car.
             In some ways it does that by brazenly impersonating a petrol drivetrain.
              The surprising thng is that's absolutely not just a gimmick.
            “Then in corners it has some original tricks of its own.
             It's not just fast, it's confident and playful so it's fun
              even when it's not going fast. It's useful and versatile too.  
            “So it has many of the talents you expect from an electric car,
             and many more that so far are unique in EVs. Which makes us call it a new and brilliant chapter.”"],
            ['id' => 2, 'Name' => 'Rolls-Royce Spectre', 'Origin' => '02', 'image_url' => '/images/elecar2.png', 'paraghraph' => "“Electric has enriched the Rolls-Royce.
             It’s still a galloping, ocean-going, 24-carat indulgence,
              but with a tasteful specification it’s just about possible
               to swerve absolute vulgarity.
            “It’s rich in the decadence of the so-called glory days but 
            gratifyingly simple to operate for a product of 2023. While 
            other manufacturers wrestle with the conundrum of transposing 
            their family heirloom values into an electric future, the age 
            of electric propulsion will suit Rolls-Royce very well indeed.”"],
            ['id' => 3, 'Name' => 'Porsche Taycan', 'Origin' => '03', 'image_url' => '/images/elecar3.png', 'paraghraph' => "“The Taycan can absolutely entertain on the right road and is a delight to cruise
             in - a GT with the heart of a sports car. More importantly,
              it’s a proper Porsche that just happens to run on electricity.”"],
            ['id' => 4, 'Name' => 'MG4', 'Origin' => '04', 'image_url' => '/images/elecar4.jpg','paraghraph' =>"“On the face of it, the MG4 doesn’t seem like a very exciting car
             - certainly not something Top Gear would give a massively high
              score to. But when you dig into what it does for the money, how 
              high it scores on multiple levels, it’s probably the only car in
               the class to recommend. It’s got range, charging, equipment,
                zippy dynamics and now some style.”"],
            ['id' => 5, 'Name' => 'Tesla Model 3 / Tesla Model Y', 'Origin' => '05', 'image_url' => '/images/elecar5.png','paraghraph' =>"“This is the future we were promised – a car with sentience,
             a sense of humour, and a fresh take on the old norms. After trying this,
              your old repmobile will just feel a bit dull. The Model 3 has been in 
              production since mid-2017, but even heading into old age, nothing on 
              the market has yet managed to beat it on all fronts. While not without
               flaws, it is quite simply one of the most interesting, compelling cars
                in the world right now. We might even look back on it as the car that
                 changed the way we all drive.”"],
            ['id' => 6, 'Name' => 'BMW i5', 'Origin' => '06', 'image_url' => '/images/elecar6.png','paraghraph' =>"“The BMW i5 is an exceptional new car. We’ll have to wait to try the
             combustion versions of the new 5 Series, but if BMW’s stated aim here 
             was to combine 3 Series dynamism with 7 Series luxury, it’s mission
              accomplished: this is the best-handling car in its class and makes
               a Model S feel like a shopping trolley. Especially the M60. Yes it’s 
               expensive, but it feels every penny of the billion-pound investment 
               it surely was for its maker.”"],
            ['id' => 7, 'Name' => 'Dacia Spring', 'Origin' => '07', 'image_url' => '/images/elecar7.png','paraghraph' =>"“The Spring’s appeal is that it’s everything that many electric cars aren’t:
             it’s not over-wrought or heavy-handed, it’s honest and enjoyable
              and manages to keep the dream of a low impact electric car alive 
              and proves to everyone else it is possible for a battery electric 
              vehicle to weigh largely the same as its petrol equivalent. Well done Dacia,
               let’s hope that where you lead, others will follow.”"],
            ['id' => 8, 'Name' => 'BMW i7', 'Origin' => '08', 'image_url' => '/images/elecar8.png','paraghraph' =>"“BMWs have always relied on their mostly great engines 
            for the soul and sensation we all crave, as well as their dynamics, but the focus is shifting elsewhere 
            now. The new 7 Series has arguably the finest interior in the automotive world, beautifully executed,
             well-made and imaginative. You can argue among yourselves about the exterior design, but inside is a 
             knock-out.
            “It’s blissfully smooth, fast and easy to drive, and impressively efficient for such a large car.
             A lot of clever, highly motivated people have dug very deep here and you can tell. The i7 is one hell of a car.”"],
             ['id' => 9, 'Name' => 'Polestar 2', 'Origin' => '09', 'image_url' => '/images/elecar9.png','paraghraph' =>"“We love the Polestar 2 because 
             it’s handsome, the build quality will give Audi drivers PTSD, and there’s a real sense of humility about the car. It’s been designed to work
              seamlessly, not to wow you with gimmicks then wind you up further down the line. Single Motor iterations make it more accessible for most too.”"]
        ];
    }
    



  public function index()
{

    return view('cars.index', [
        'cars' =>Car::all()
    ]);

    
}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    
    
    $imageName = $request->file('image_url')->getClientOriginalName();
    $imagePath = $request->file('image_url')->storeAs('images', $imageName, 'public');

    $car = new Car();
    $car->name = $request->input('name');
    $car->origin = $request->input('origin');
    $car->image_url = 'images/' . $imageName;
    $car->paragraph = $request->input('paragraph');

    $car->save();

    return redirect()->route('cars.index')->with('success', 'Car created successfully.');
}



    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $car = Car::findOrFail($id);
    
    return view('cars.show', [
        'car' => $car
    ]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
{
    $data = $request->all();
    if ($request->hasFile('image')) {
        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $fileName);
        $data['image'] = $fileName;
    }
    $car->update($data);
    return redirect()->route('cars.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
