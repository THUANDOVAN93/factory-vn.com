以下のお問い合わせがありました。
対応お願いします。

物件名
<?php echo $contact['buildings_name']; ?>


会社名
<?php echo $contact['company_name']; ?>


業種
<?php echo $contact['industry']; ?>


お名前
<?php echo $contact['name']; ?>


住所
<?php echo $contact['address']; ?>


電話番号
<?php echo $contact['tel']; ?>


FAX
<?php echo $contact['fax']; ?>


BOIゾーン
<?php echo $contact['boi_zone']; ?>


ロケーション
<?php echo $contact['location']; ?>


進出形態
<?php if (isset($contact['factory_sub_category']) && strlen($contact['factory_sub_category']) > 0) { echo $factorySubCategories[$contact['factory_sub_category']]; } ?>


<?php if (isset($contact['factory_sub_category']) && $contact['factory_sub_category'] == "5") { ?>
必要面積
<?php echo $contact['floor_space_site']; ?>


<?php } ?>
<?php if (isset($contact['factory_sub_category']) && $contact['factory_sub_category'] != "5" && strlen($contact['factory_sub_category']) > 0) { ?>
必要面積
<?php echo $contact['floor_space_building']; ?>


床耐荷重
<?php echo $contact['weight_limit']; ?>


天井高
<?php echo $contact['building_height']; ?>


<?php } ?>
お問い合わせ内容
<?php echo $contact['message']; ?>


E-mail
<?php echo $contact['email']; ?>



------------------------------

東京デベロップメントコンサルタント



------------------------------
