<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TABLE GENRES

        DB::table('genres')->insert([
            'name'=>'Drama'
        ]);

        DB::table('genres')->insert([
            'name'=>'Tv Show'
        ]);

        DB::table('genres')->insert([
            'name'=>'Kids'
        ]);

        //TABLE MOVIES

        //DRAMA
        DB::table('movies')->insert([
            'genre_id'=> 1,
            'title' => 'Pretty Little Liars S1',
            'photo' => 'https://www.ubuy.co.id/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzFlTW5PQm15WEwuX1NMMTUwMF8uanBn.jpg',
            'description' => 'Four friends band together against an anonymous foe who threatens to reveal their darkest secrets, while also investigating the disappearance of their best friend.',
            'rating' => 4
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 1,
            'title' => 'Cheese in The Trap',
            'photo' => 'https://static.cinemagia.ro/img/db/movie/22/33/113/cheese-in-the-trap-421215l.jpg',
            'description' => 'The drama focuses on the life and relationships of a group of university students, particularly the difficult relationship between hard-working scholarship student Hong Seol (Kim Go-eun) and a deceptive senior, Yoo Jung (Park Hae-jin).',
            'rating' => 4
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 1,
            'title' => 'Crash Landing on You',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMzRiZWUyN2YtNDI4YS00NTg2LTg0OTgtMGI2ZjU4ODQ4Yjk3XkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_.jpg',
            'description' => 'The absolute top secret love story of a chaebol heiress who made an emergency landing in North Korea because of a paragliding accident and a North Korean special officer who falls in love with her and who is hiding and protecting her.',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 1,
            'title' => 'Winter Sonata',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BZTFlZmQxNmItZTM4Ny00ZGMxLThlMTItMTRlMjg1ZjhkNDVhXkEyXkFqcGdeQXVyMjIyNzU0OA@@._V1_.jpg',
            'description' => 'Yu-Jin falls in love with Joon-sang as a schoolgirl and after losing him in an accident decides to marry her childhood friend, Sang-hyuk but just as they are to announce their engagement.. Min-hyung arrives in Seoul and looking exactly like her lost love Yu-Jin is in a bind.',
            'rating' => 5
        ]);

        //TV SHOW
        DB::table('movies')->insert([
            'genre_id'=> 2,
            'title' => 'Master Chef USA S11',
            'photo' => 'https://picfiles.alphacoders.com/158/158686.jpg',
            'description' => 'A nationwide search for the best home cooks in America. One of 50 hopefuls will become a culinary star and one of America\'s \"Masterchefs.\"',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 2,
            'title' => 'Asia\'s Got Talent',
            'photo' => 'https://www.themoviedb.org/t/p/original/4oX3HWEhVEZ4gmvkWrwaBnV7pJ8.jpg',
            'description' => 'Reality TV show from Asia.',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 2,
            'title' => 'Kick Andy',
            'photo' => 'https://cdn.tatlerasia.com/tatlerasia/i/2021/12/18122303-andy-f-noya-final_cover_1000x1343.jpg',
            'description' => 'An inspirational tv show, moderated by Andy F.Noya.',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 2,
            'title' => 'Running Man 2022',
            'photo' => 'https://img.betaseries.com/-IMlNdNlbv4pIqdlxAl4hxrv6Os=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2F2c7ec0ce0fa824286879aefb6a3ff90c.jpg',
            'description' => 'Running Man is a reality-variety show where the cast must complete missions at various places to win the race.',
            'rating' => 5
        ]);

        //KIDS
        DB::table('movies')->insert([
            'genre_id'=> 3,
            'title' => 'Spongebob Squarepants 2021',
            'photo' => 'https://picfiles.alphacoders.com/108/108129.jpg',
            'description' => 'SpongeBob SquarePants is an American animated television series. Created by former marine biologist and animator Stephen Hillenburg, it is broadcasted on Nickelodeon, an American cable network.',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 3,
            'title' => 'Tom and Jerry',
            'photo' => 'https://picfiles.alphacoders.com/427/427773.jpg',
            'description' => 'Tom and Jerry is an American animated series produced by MGM which tells the story of a cat and a mouse who always fight.',
            'rating' => 5
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 3,
            'title' => 'The Powerpuff Girls',
            'photo' => 'https://picfiles.alphacoders.com/410/410329.jpg',
            'description' => 'The Powerpuff Girls is an American animated television series based on the original 1998 series by Craig McCracken, which is directed by Nick Jennings and Bob Boyle. ',
            'rating' => 4
        ]);

        DB::table('movies')->insert([
            'genre_id'=> 3,
            'title' => 'Doraemon',
            'photo' => 'https://picfiles.alphacoders.com/362/362350.jpg',
            'description' => 'Doraemon (ドラえもん, Doraemon) is the first anime TV series based on Fujiko F. Fujio\'s manga of the same name.',
            'rating' => 5
        ]);

        //TABLE EPISODES

        //PRETTY LITTLE LIARS
        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '1',
            'title' => 'Pilot'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '2',
            'title' => 'The Jenna Thing'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '3',
            'title' => 'To Kill a Mocking Girl'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '4',
            'title' => 'Can You Hear Me Now?'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '5',
            'title' => 'Reality Bites Me'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '1',
            'episode' => '6',
            'title' => 'There\'s No Place Like Homecoming'
        ]);

        //Cheese In the Trap
        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '1',
            'title' => 'Reason for Leave of Absence'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '2',
            'title' => 'Hoo Yeon\'s Harrasment'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '3',
            'title' => 'Warnings from In Ho'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '4',
            'title' => 'Date with Jung'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '5',
            'title' => 'Jung\'s Past'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '2',
            'episode' => '6',
            'title' => 'Troubles in School'
        ]);

        //Crash Landing On You
        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '1',
            'title' => 'Wakes Up'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '2',
            'title' => 'Hiding'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '3',
            'title' => 'Background Story'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '4',
            'title' => 'Escape Plan'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '5',
            'title' => 'Marry for Favor'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '3',
            'episode' => '6',
            'title' => 'In a Hotel Together'
        ]);

        //Winter Sonata
        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '1',
            'title' => 'Black and White Photo'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '2',
            'title' => 'Kingdom of Shadows'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '3',
            'title' => 'First Time'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '4',
            'title' => 'The Promise That Couldn\'t Be Kept'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '5',
            'title' => 'Was Seeing You Just A Dream?'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '4',
            'episode' => '6',
            'title' => 'The Woman Who Can\'t Forget Her First Love'
        ]);

        //Master Chef USA
        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '1',
            'title' => 'Audition Round 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '2',
            'title' => 'Audition Round 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '3',
            'title' => 'Audition Round 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '4',
            'title' => 'Monkfish Challenge'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '5',
            'title' => 'Dessert Challenge'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '5',
            'episode' => '6',
            'title' => 'Meat Roulette'
        ]);

        //Asia's Got Talent
        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '1',
            'title' => 'Audition 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '2',
            'title' => 'Audition 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '3',
            'title' => 'Audition 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '4',
            'title' => 'Audition 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '5',
            'title' => 'Audition 5'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '6',
            'episode' => '6',
            'title' => 'Semifinals 1'
        ]);

        //Kick Andy
        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '1',
            'title' => 'Bisnis Kekinian'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '2',
            'title' => 'Jingga Diantara Hitam dan Putih'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '3',
            'title' => 'Guterres Pahlawan atau Pelanggar Ham?'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '4',
            'title' => 'Kreasi Diatas Roda Dua'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '5',
            'title' => 'Serikat Kebaikan'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '7',
            'episode' => '6',
            'title' => 'Jalan Ilahi'
        ]);

        //Running Man 2022
        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '1',
            'title' => 'episode 599'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '2',
            'title' => 'episode 600'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '3',
            'title' => 'episode 601'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '4',
            'title' => 'episode 602'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '5',
            'title' => 'episode 603'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '8',
            'episode' => '6',
            'title' => 'episode 604'
        ]);

        //Spongebob Squarepants
        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '1',
            'title' => 'A Place for Pets'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '2',
            'title' => 'Lockdown for Love'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '3',
            'title' => 'Under the Small Top'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '4',
            'title' => 'Squidward\'s Sick Daze'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '5',
            'title' => 'Goofy Scoopers'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '9',
            'episode' => '6',
            'title' => 'Pat The Dog'
        ]);

        //Tom And Jerry
        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '1',
            'title' => 'Puss Gets the Boot'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '2',
            'title' => 'The Midnight Snack'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '3',
            'title' => 'The Night Before Christmas'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '4',
            'title' => 'Fraidy Cat'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '5',
            'title' => 'Dog Trouble'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '10',
            'episode' => '6',
            'title' => 'Puss n\' Toots'
        ]);

        //The Powerpuff Girls
        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '1',
            'title' => 'Escape from Monster Island'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '2',
            'title' => 'Princess Buttercup'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '3',
            'title' => 'The Stayover'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '4',
            'title' => 'Painbow'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '5',
            'title' => 'Horn Sweet Horn'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '11',
            'episode' => '6',
            'title' => 'Man Up'
        ]);

        //Doraemon
        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '1',
            'title' => 'The Fishing Pond in My Study Room'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '2',
            'title' => 'The City of Dreans, Nobita Land'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '3',
            'title' => 'The Transformation Biscuits'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '4',
            'title' => 'Memorization Bread for Testing'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '5',
            'title' => 'N-S Badges'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => '12',
            'episode' => '6',
            'title' => 'Wrestling Killer'
        ]);


    }
}
