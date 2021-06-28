<?php
/*
 * Задание 1
 *
 */
$a = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cupiditate dignissimos maxime nemo obcaecati saepe totam voluptates. Accusamus alias debitis magnam, magni omnis quam quisquam rerum similique ullam? Accusamus aut consequuntur dignissimos earum eius et inventore magnam, natus optio praesentium provident quam quibusdam quos recusandae unde! Amet aperiam autem commodi consectetur consequuntur corporis debitis eveniet ex explicabo fugiat id, illo iste iure magni molestiae nobis nulla obcaecati perferendis praesentium quas quidem quis quod rerum, sint unde ut voluptatibus voluptatum. Consequatur consequuntur deserunt dolorum earum eligendi expedita magnam minus molestiae molestias omnis pariatur quasi, qui quo sed soluta. Architecto at autem dicta ducimus eos exercitationem maiores nemo suscipit voluptatem, voluptates. Ab accusamus alias aperiam assumenda beatae consequuntur culpa deleniti dicta dignissimos ducimus ea est eum excepturi expedita, harum incidunt inventore ipsum laboriosam non nulla, officiis quam quasi quisquam recusandae repellat rerum similique sit tempore temporibus ullam vel velit vero voluptate! Culpa doloribus esse ipsam molestiae odio! Accusantium aliquid beatae delectus dicta enim eos facilis fuga illo illum in iste laudantium maxime mollitia natus nulla officia possimus quaerat quis rem repellendus, repudiandae, sint suscipit vero. Explicabo hic, qui. Alias at cupiditate et facere fuga fugiat harum illo incidunt ipsum itaque modi molestiae numquam, odit omnis, perspiciatis qui quisquam ratione soluta, unde vitae? Asperiores commodi dignissimos eaque enim, fugiat harum id impedit inventore iste, laboriosam magni mollitia necessitatibus numquam temporibus voluptatem? Aliquam cupiditate dicta explicabo fugiat natus quae, voluptates? A assumenda beatae doloremque iusto nobis, numquam obcaecati quaerat repellat sapiente. Architecto assumenda atque dolorem molestiae nemo ratione totam ullam veniam. A doloribus ea et eum facere harum ipsa molestias, nam necessitatibus nulla quidem quod rerum sint! A atque autem commodi consequatur consequuntur cum cumque delectus dicta dolore doloribus est harum id ipsa laboriosam laborum nemo nisi nulla odit officia omnis perspiciatis praesentium quas quisquam quod quos saepe sed similique sit totam unde ut veniam voluptate, voluptates? At debitis dolore, nemo nisi numquam officia omnis repellat sapiente veritatis. Accusamus aliquid, asperiores aspernatur consectetur consequuntur, distinctio eveniet exercitationem id illum ipsam itaque, labore libero molestias nemo omnis pariatur placeat possimus qui sed sequi vero vitae voluptas voluptate voluptatem voluptatum. Beatae blanditiis fuga id inventore ipsum laboriosam nobis omnis quidem suscipit voluptatum. Adipisci aperiam corporis deserunt dolores ex, illo illum ipsam iste mollitia, natus perspiciatis placeat possimus quasi quia, rem repellat veritatis voluptates. Accusamus assumenda blanditiis commodi consequuntur cumque debitis delectus ducimus eligendi enim est ex exercitationem facere harum natus nemo nostrum omnis perferendis placeat praesentium quae qui quibusdam, quidem quod rem reprehenderit rerum saepe sapiente sed similique temporibus. Adipisci dignissimos distinctio dolorum eaque fuga id, incidunt, iure molestias nulla odio odit officia pariatur placeat quasi quia tenetur ullam veniam voluptatem. Cupiditate, deleniti distinctio doloremque eaque eos error esse eveniet fugiat iure magni nobis obcaecati placeat possimus provident quae rerum sapiente sunt suscipit, tempora voluptatibus. A atque autem blanditiis consequatur deserunt dolor dolorum esse fugiat id illo ipsa iusto laborum libero modi necessitatibus nihil nulla obcaecati optio qui quibusdam quidem quis quod quos rerum saepe sapiente sequi, similique tempora tempore veritatis! Ab aliquam deleniti explicabo molestiae quam tempora";
$link = "/news";

$b = strip_tags($a);
$b = substr($a, 0, 180);
echo $b;
$array = explode ( ' ', $b );
$b = implode ( ' ', array_slice($array, count($array)-2, 2));
$lasttext = "<a href='{{$link}}'>" .$b . '... '."</a>";
$pattern = "/$b/";
$preg = preg_replace($pattern,'', $lasttext);
echo $lasttext;

/*
 * Задание 2
 *
 */
$image = include "/Path";
$new_image = imagecreatetruecolor(200, 100);
imagecopyresampled($new_image, $image, 0, 0, 0, 0, 200, 100, 20000, 20000);
echo $new_image;

/*
 * Задание 3
 *
 */
// 1. SELECT * FROM a, b WHERE a.id=b.a_id; - первый запрос является устаревшим
// 2. SELECT * FROM a JOIN b ON a.id=b.a_id; - второй запрос более свеж но полностью идентичен первому

/*
 * Задание 4
 *
 */

$array = [];
for ($i=0;$i<=100;$i++){
    $rand = rand(0,10);
    $array[$i] = $rand;
}
print_r(array_count_values($array));