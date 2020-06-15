<?php
  
namespace Dan\HoodHelmet;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;


class Main extends PluginBase implements Listener{

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onLoad() {
    	$this->getLogger()->info(TF::BLUE . "Plugin fait par DanStan (HoodHelmet)");
  }

  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){

    if($Nid === 397){
  $eff = new EffectInstance(Effect::getEffect(Effect::INVISIBILITY) , 1 * 999999, 1,false);
$player->addEffect($eff);
         
    }elseif($Oid === 397){
      $player->removeEffect(14);
    }
  }
 }
}
