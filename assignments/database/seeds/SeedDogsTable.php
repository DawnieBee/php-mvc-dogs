<?php

use Illuminate\Database\Seeder;

class SeedDogsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            'name' => 'Ginger',
            'age' => 5,
            'image' => '/images/ginger.jpg',
            'sex' => 'female',
            'breed' => 'Australian Shepherd',
            'size' => 'Medium',
            'intact' => 'yes',
            'abstract' => 'A lean, tough ranch dog,...',
            'description' => 'The Australian Shepherd, the cowboy’s herding dog of choice, is a medium-sized worker with a keen, penetrating gaze in the eye. Aussie coats offer different looks, including merle (a mottled pattern with contrasting shades of blue or red). In all ways, they’re the picture of rugged and agile movers of stock. Aussies exhibit an irresistible impulse to herd, anything: birds, dogs, kids. This strong work drive can make Aussies too much dog for a sedentary pet owner. Aussies are remarkably intelligent, quite capable of hoodwinking an unsuspecting novice owner. In short, this isn’t the pet for everyone. But if you’re looking for a brainy, tireless, and trainable partner for work or sport, your search might end here.',
            'category_id' => 5
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Sammy',
            'age' => 7,
            'image' => '/images/sammy.jpg',
            'sex' => 'female',
            'breed' => 'Beagle',
            'size' => 'Small',
            'intact' => 'no',
            'abstract' => ' Excellent hunting dog and loyal companion...',
            'description' => 'They come in such pleasing colors as lemon, red and white, and tricolor. The Beagle’s fortune is in his adorable face, with its big brown or hazel eyes set off by long, houndy ears set low on a broad head.  A breed described as “merry” by its fanciers, Beagles are loving and lovable, happy, and companionable—all qualities that make them excellent family dogs. No wonder that for years the Beagle has been the most popular hound dog among American pet owners. These are curious, clever, and energetic hounds who require plenty of playtime.',
            'category_id' => 2
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Chewie',
            'age' => 1,
            'image' => '/images/chewie.jpg',
            'sex' => 'male',
            'breed' => 'Shih Tzu',
            'size' => 'Small',
            'intact' => 'yes',
            'abstract' => 'A perfect lap dog...',
            'description' => 'The Shih Tzu is a sturdy, lively, alert toy dog with long flowing double coat. Befitting his noble Chinese ancestry as a highly valued, prized companion and palace pet, the Shih Tzu is proud of bearing, has a distinctively arrogant carriage with head well up and tail curved over the back. Although there has always been considerable size variation, the Shih Tzu must be compact, solid, carrying good weight and substance. Even though a toy dog, the Shih Tzu must be subject to the same requirements of soundness and structure prescribed for all breeds, and any deviation from the ideal described in the standard should be penalized to the extent of the deviation.eet, and wideeyed, imparting the impression of trust and friendliness. Their long, dense coat is double and fairly straight.',
            'category_id' => 6
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Lucky',
            'age' => 3,
            'image' => '/images/lucky.jpg',
            'sex' => 'female',
            'breed' => 'Border Collie',
            'size' => 'Medium',
            'intact' => 'yes',
            'abstract' => 'A remarkably bright workaholic...',
            'description' => 'The almond eyes are the focus of an intelligent expression—an intense gaze, the Border Collies’s famous “herding eye”, is a breed hallmark. On the move, Collies are among the canine kingdom’s most agile, balanced, and durable citizens.  The intelligence, athleticism, and trainability of Borders have a perfect outlet in agility training. Having a job to perform, like agility—or herding or obedience work—is key to Collie happiness. Amiable among friends, they may be reserved with strangers.',
            'category_id' => 3
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Bo',
            'age' => 3,
            'image' => '/images/bo.jpg',
            'sex' => 'male',
            'breed' => 'German Shepherd',
            'size' => 'Large',
            'intact' => 'no',
            'abstract' => 'A remarkably bright workaholic...',
            'description' => 'There are many reasons why German Shepherds stand in the front rank of canine royalty, but experts say their defining attribute is character: loyalty, courage, confidence, the ability to learn commands for many tasks, and the willingness to put their life on the line in defense of loved ones. German Shepherds will be gentle family pets and steadfast guardians, but, the breed standard says, there’s a certain aloofness that does not lend itself to immediate and indiscriminate friendships.',
            'category_id' => 5
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Ryder',
            'age' => 3,
            'image' => '/images/ryder.jpg',
            'sex' => 'male',
            'breed' => 'Collie',
            'size' => 'Medium',
            'intact' => 'no',
            'abstract' => 'Among the world’s most recognizable breeds...',
            'description' => 'Collies are famously fond of children and make wonderful family pets. These swift, athletic dogs thrive on companionship and regular exercise. With gentle training, they learn happily and rapidly. The Collie’s loyalty, intelligence, and sterling character are the stuff of legend.',
            'category_id' => 3
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Jeffrey',
            'age' => 2,
            'image' => '/images/jeffrey.jpg',
            'sex' => 'male',
            'breed' => 'Brindle Beagle',
            'size' => 'Medium',
            'intact' => 'no',
            'abstract' => 'Enjoys company and is generally easygoing...',
            'description' => 'They come in such pleasing colors as lemon, red and white, and tricolor. The Beagle’s fortune is in his adorable face, with its big brown or hazel eyes set off by long, houndy ears set low on a broad head.  A breed described as “merry” by its fanciers, Beagles are loving and lovable, happy, and companionable—all qualities that make them excellent family dogs. No wonder that for years the Beagle has been the most popular hound dog among American pet owners. These are curious, clever, and energetic hounds who require plenty of playtime.',
            'category_id' => 2
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Duke',
            'age' => 6,
            'image' => '/images/duke.jpg',
            'sex' => 'male',
            'breed' => 'Golden Lab',
            'size' => 'Large',
            'intact' => 'no',
            'abstract' => 'Want to spend lazy days in the country...',
            'description' => 'Labs are famously friendly. They are companionable housemates who bond with the whole family, and they socialize well with neighbor dogs and humans alike. But don’t mistake his easygoing personality for low energy: The Lab is an enthusiastic athlete that requires lots of exercise, like swimming and marathon games of fetch, to keep physically and mentally fit.',
            'category_id' => 4
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Rex',
            'age' => 3,
            'image' => '/images/rex.jpg',
            'sex' => 'male',
            'breed' => 'Black Lab',
            'size' => 'Large',
            'intact' => 'yes',
            'abstract' => 'Need to go hunting...',
            'description' => 'Labs are famously friendly. The dense, hard coat comes in yellow, black, and a luscious chocolate. They are companionable housemates who bond with the whole family, and they socialize well with neighbor dogs and humans alike. But don’t mistake his easygoing personality for low energy: The Lab is an enthusiastic athlete that requires lots of exercise, like swimming and marathon games of fetch, to keep physically and mentally fit.',
            'category_id' => 4
            
        ]);

        DB::table('dogs')->insert([
            'name' => 'Ricki and Nicki',
            'age' => 8,
            'image' => '/images/ricki_nicki.jpg',
            'sex' => 'male',
            'breed' => 'Shih Tzu',
            'size' => 'Small',
            'intact' => 'no',
            'abstract' => 'We come as a pair of brothers...',
            'description' => 'The Shih Tzu is a sturdy, lively, alert toy dog with long flowing double coat. Befitting his noble Chinese ancestry as a highly valued, prized companion and palace pet, the Shih Tzu is proud of bearing, has a distinctively arrogant carriage with head well up and tail curved over the back. Although there has always been considerable size variation, the Shih Tzu must be compact, solid, carrying good weight and substance. Even though a toy dog, the Shih Tzu must be subject to the same requirements of soundness and structure prescribed for all breeds, and any deviation from the ideal described in the standard should be penalized to the extent of the deviation.eet, and wideeyed, imparting the impression of trust and friendliness. Their long, dense coat is double and fairly straight.',
            'category_id' => 6
            
        ]);




    }
}
