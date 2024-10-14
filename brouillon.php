<?php


if ($nextHeroIndex !== null) {
    echo "Index du héros suivant : " . $nextHeroIndex . "\n";
} else {
    echo "Il n'y a pas de héros suivant.\n"; // Pas de héros suivant
}

if ($prevHeroIndex !== null) {
    echo "Index du héros précédent : " . $prevHeroIndex . "\n";
} else {
    echo "Il n'y a pas de héros précédent.\n"; // Pas de héros précédent
}

{
    "pageProps":{
       "locale":"en",
       "messages":{
          "DOTA_Glossary_Abilities":"Abilities",
          "dota.Recipe":"Recipe",
          "dota.Attributes":"Attributes",
          "DOTA_Item_Build_Early_Game":"Early Game",
          "DOTA_Item_Build_Mid_Items":"Mid Game",
          "DOTA_Item_Build_Late_Items":"Late Game",
          "dota.roles.Core":"Core",
          "dota.roles.Initiator":"Initiator",
          "dota.roles.Offlane":"Offlane",
          "dota.roles.Support":"Support",
          "dota.roles.Jungle":"Jungle",
          "dota.roles.Roamer":"Roamer",
          "dota.roles.SafeLane":"Safe Lane",
          "dota.roles.MidLane":"Mid Lane",
          "dota.roles.OffLane":"Off Lane",
          "dota.roles.HardSupport":"Hard Support",
          "dota.roles.Unknown":"Unknown",
          "dota.roles.Carry":"Carry",
          "dota.roles.Mid":"Mid",
          "DOTA_Scoreboard_Header_Hero":"Hero",
          "DOTA_HeroRole_Carry":"Carry",
          "DOTA_HeroRole_Support":"Support",
          "DOTA_HeroRole_Nuker":"Nuker",
          "DOTA_HeroRole_Disabler":"Disabler",
          "DOTA_HeroRole_Jungler":"Jungler",
          "DOTA_HeroRole_Durable":"Durable",
          "DOTA_HeroRole_Escape":"Escape",
          "DOTA_HeroRole_LaneSupport":"Lane Support",
          "DOTA_HeroRole_Pusher":"Pusher",
          "DOTA_HeroRole_Initiator":"Initiator",
          "DOTA_AbilityTooltip_Dependency":"LEVELS WITH: {s:dependentability}",
          "DOTA_AbilityTooltip_Breakable":"BREAKABLE: Yes",
          "dota.Strength":"Strength",
          "dota.Intelligence":"Intelligence",
          "dota.Agility":"Agility",
          "dota.abilities.special_bonus_attributes":"Attribute Bonus",
          "dota.heroes.npc_dota_hero_life_stealer":"Lifestealer",
          "dota.heroes.npc_dota_hero_life_stealer.npedesc1":"Infests other units for mobility and strength",
          "dota.heroes.npc_dota_hero_life_stealer.hype":"Should Lifestealer get close to his prey, there is little that can save them. Travelling within a creep or an allied hero, once he nears a foe he explodes from his host body, <b>surprising enemies</b> and tearing into them with his <b>claws.</b>",
          "dota.items.item_ultimate_scepter":"Aghanim's Scepter",
          "dota.items.item_aghanims_shard":"Aghanim's Shard",
          "dota.abilities.life_stealer_open_wounds":"Open Wounds",
          "dota.abilities.life_stealer_open_wounds.Description":"Lifestealer rends an enemy unit, slowing the victim's movement speed and allowing all allies to regain health for a percentage of the damage they deal to that unit. All damage dealt will steal life, including damage from spells. The victim recovers movement speed over the duration.",
          "dota.abilities.life_stealer_open_wounds.Lore":"Fresh wounds and the scent of blood often draw out the scavengers to finish the job.",
          "dota.abilities.life_stealer_open_wounds.Note0":"Open Wounds slows over 8 different steps: 50% / 50% / 40% / 30% / 20% / 10% / 10% / 10%, with the slow decreasing one step per second.",
          "dota.abilities.life_stealer_open_wounds.Note1":"Stacks additively with other sources of Lifesteal.",
          "dota.abilities.life_stealer_open_wounds.heal_percent":"%LIFE STEAL:",
          "dota.abilities.life_stealer_open_wounds.slow_tooltip":"%MAX SLOW:",
          "dota.abilities.life_stealer_open_wounds.duration":"DURATION:",
          "dota.abilities.life_stealer_ghoul_frenzy":"Ghoul Frenzy",
          "dota.abilities.life_stealer_ghoul_frenzy.Description":"Passively grants Lifestealer Movement and Attack Speed.",
          "dota.abilities.life_stealer_ghoul_frenzy.attack_speed_bonus":"BONUS ATTACK SPEED:",
          "dota.abilities.life_stealer_ghoul_frenzy.movement_speed_bonus":"%BONUS MOVE SPEED:",
          "dota.abilities.life_stealer_feast":"Feast",
          "dota.abilities.life_stealer_feast.Description":"Lifestealer's attacks deal damage and provide heal for a percentage of his target's max health. Allows Lifestealer to attack allied creeps at %creep_deny_percent%%% health. Lifestealer gains permanent max HP whenever he kills a creep or hero.",
          "dota.abilities.life_stealer_feast.Lore":"After escaping from his cell in Devarque, N'aix subsisted on flesh and bones of those unfortunate to cross his path.",
          "dota.abilities.life_stealer_feast.Note0":"Works on allies and enemies. Does not affect Roshan.",
          "dota.abilities.life_stealer_feast.Note1":"The heal is independent of the damage.",
          "dota.abilities.life_stealer_feast.Note2":"Stacks additively with other sources of Lifesteal.",
          "dota.abilities.life_stealer_feast.Note3":"Break disables the gaining of new stacks.",
          "dota.abilities.life_stealer_feast.Note4":"Break does not disable the bonuses from existing stacks.",
          "dota.abilities.life_stealer_feast.hp_leech_percent":"%MAX HEALTH LIFE STEAL:",
          "dota.abilities.life_stealer_feast.hp_damage_percent":"%MAX HEALTH DAMAGE:",
          "dota.abilities.life_stealer_feast.bonus_hp_per_creep":"MAX HP PER CREEP KILL:",
          "dota.abilities.life_stealer_feast.bonus_hp_per_hero":"MAX HP PER HERO KILL:",
          "dota.abilities.life_stealer_feast.bonus_hp_total":"PERMANENT MAX HP:",
          "dota.abilities.life_stealer_infest":"Infest",
          "dota.abilities.life_stealer_infest.Lore":"With this infestation, N'aix consumes the life blood of the host, restoring him back to full unholy power.",
          "dota.abilities.life_stealer_infest.Description":"Lifestealer infests the body of a target unit, becoming undetectable, and healing for a portion of his max hitpoints every second while inside. He can then explode from the host body, dealing damage to nearby enemies. If the infested unit is an enemy creep or a neutral creep, he can take control of the unit's ability to move and attack. Does not work on enemy heroes.\n\nDISPEL TYPE: Basic Dispel",
          "dota.abilities.life_stealer_infest.Note0":"Lifestealer gains experience while under the effects of Infest.",
          "dota.abilities.life_stealer_infest.Note1":"Creeps that are controlled while Infested gain Infest's movement speed bonus.",
          "dota.abilities.life_stealer_infest.Note2":"Infest Level 2 and 3 can be used on Ancient creeps.",
          "dota.abilities.life_stealer_infest.Note3":"Does not trigger spell reflect.",
          "dota.abilities.life_stealer_infest.damage":"DAMAGE:",
          "dota.abilities.life_stealer_infest.radius":"DAMAGE RADIUS:",
          "dota.abilities.life_stealer_infest.self_regen":"%SELF MAX HP REGEN:",
          "dota.abilities.life_stealer_infest.bonus_movement_speed":"%MOVEMENT SPEED:",
          "dota.abilities.life_stealer_infest.bonus_health":"HEALTH BONUS:",
          "dota.abilities.life_stealer_infest.cooldown_scepter":"COOLDOWN:",
          "dota.abilities.life_stealer_infest.cast_range_scepter":"CAST RANGE:",
          "dota.abilities.life_stealer_infest.attack_rate_scepter":"ATTACK RATE:",
          "dota.abilities.life_stealer_infest.bonus_regen_pct_scepter":"%BONUS REGEN:",
          "dota.abilities.life_stealer_infest.infest_duration_scepter":"ENEMY DURATION:",
          "dota.abilities.life_stealer_infest.ScepterDescription":"Increases cast range and reduces cooldown to %bonus_AbilityCooldown%s.  Infest may target enemy heroes for a short duration, disarming them and attacking them from the inside while increasing Lifestealer's regeneration rate.",
          "dota.abilities.life_stealer_infest.ShardDescription":"Infest explosion applies a %bonus_open_wounds_duration_pct%%% duration Open Wounds to enemies in the damage radius.",
          "dota.abilities.life_stealer_consume":"Consume",
          "dota.abilities.life_stealer_consume.Description":"Lifestealer eats the host body from the inside out, exploding from within.",
          "dota.abilities.special_bonus_unique_lifestealer_infest_damage":"+{s:bonus_damage} Infest Damage",
          "dota.abilities.special_bonus_unique_lifestealer_2":"+{s:bonus_movement_speed_bonus}% Ghoul Frenzy Movement Speed",
          "dota.abilities.special_bonus_unique_lifestealer_5":"+{s:bonus_attack_speed_bonus} Ghoul Frenzy Attack Speed",
          "dota.abilities.special_bonus_unique_lifestealer_4":"+{s:bonus_slow_tooltip}% Open Wounds Slow",
          "dota.abilities.special_bonus_unique_lifestealer_infest_target_bonus":"+{s:bonus_bonus_movement_speed}% Infest Target Movespeed/Health",
          "dota.abilities.special_bonus_unique_lifestealer_6":"+{s:bonus_heal_percent}% Open Wounds Lifesteal",
          "dota.abilities.special_bonus_unique_lifestealer_3":"+{s:bonus_hp_damage_percent}% Feast Lifesteal and Damage",
          "dota.abilities.special_bonus_unique_lifestealer":"+{s:bonus_duration}s Rage Duration",
          "dota.abilities.special_bonus_unique_lifestealer.Facet_life_stealer_rage_dispell":"+{s:bonus_duration}s Unfettered Duration",
          "dota.abilities.special_bonus_unique_lifestealer.2":"+{s:bonus_movement_speed_bonus}% Ghoul Frenzy Movement Speed",
          "dota.abilities.special_bonus_unique_lifestealer.3":"+{s:bonus_hp_damage_percent}% Feast Lifesteal and Damage",
          "dota.abilities.special_bonus_unique_lifestealer.4":"+{s:bonus_slow_tooltip}% Open Wounds Slow",
          "dota.abilities.special_bonus_unique_lifestealer.5":"+{s:bonus_attack_speed_bonus} Ghoul Frenzy Attack Speed",
          "dota.abilities.special_bonus_unique_lifestealer.6":"+{s:bonus_heal_percent}% Open Wounds Lifesteal",
          "dota.abilities.special_bonus_unique_lifestealer.7":"+{s:bonus_attack_speed_bonus} Ghoul Frenzy Attack Speed",
          "dota.abilities.special_bonus_unique_lifestealer.ghoul_frenzy_miss":"{s:bonus_miss_pct}% Miss Chance on Ghoul Frenzy",
          "dota.abilities.special_bonus_unique_lifestealer.infest_damage":"+{s:bonus_damage} Infest Damage",
          "dota.abilities.special_bonus_unique_lifestealer.infest_target_bonus":"+{s:bonus_bonus_movement_speed}% Infest Target Movespeed/Health",
          "dota.abilities.special_bonus_unique_lifestealer.rage_armor":"+{s:bonus_bonus_armor} Armor during Rage",
          "dota.abilities.life_stealer_corpse_eater":"Corpse Eater",
          "dota.abilities.life_stealer_corpse_eater.Description":"Lifestealer gains %bonus_hp_per_creep% HP whenever he kills a creep, and %bonus_hp_per_hero% whenever he kills a hero.",
          "dota.abilities.life_stealer_rage":"Rage",
          "dota.abilities.life_stealer_rage.Description":"Launch into a maddened rage, becoming Debuff Immune and increasing magic resistance.\n\nDISPEL TYPE: Basic Dispel",
          "dota.abilities.life_stealer_rage.Lore":"The madness and brutality of N'aix makes him a vicious and unrelenting foe in combat.",
          "dota.abilities.life_stealer_rage.duration":"DURATION:",
          "dota.abilities.life_stealer_rage.magic_resist":"%MAGIC RESISTANCE:",
          "dota.abilities.life_stealer_rage.status_resist":"%STATUS RESISTANCE:",
          "dota.abilities.life_stealer_unfettered":"Unfettered",
          "dota.abilities.life_stealer_unfettered.Description":"Descend into a violent fury, gaining increased status and magic resistance. Applies a dispel and can be cast while disabled.\n\nDISPEL TYPE: Strong Dispel",
          "dota.abilities.life_stealer_unfettered.duration":"DURATION:",
          "dota.abilities.life_stealer_unfettered.magic_resist":"%MAGIC RESISTANCE:",
          "dota.abilities.life_stealer_unfettered.status_resist":"%STATUS RESISTANCE:",
          "dota.heroes.life_stealer.Lore":"In the dungeons of Devarque, a vengeful wizard lay in shackles, plotting his escape. He shared his cell with a gibbering creature known as N'aix, a thief cursed by the Vile Council with longevity, so that its life-sentence for theft and cozening might be as punishing as possible. Over the years, its chains had corroded, along with its sanity; N'aix retained no memory of its former life and no longer dreamt of escape.<br></br>Seeing a perfect vessel for his plans, the wizard wove a spell of Infestation and cast his life-force into N'aix's body, intending to compel N'aix to sacrifice itself in a frenzy of violence while the mage returned to his body and crept away unnoticed. Instead, the wizard found his mind caught in a vortex of madness so powerful that it swept away his plans and shattered his will. Jarred to consciousness by the sudden infusion of fresh life, N'aix woke from its nightmare of madness and obeyed the disembodied voice that filled its skull, which had only the one thought: To escape.<br></br>In that moment Lifestealer was born. The creature cast its mind into dungeon guards and soldiers, compelling them to open locks and cut down their companions, opening an unobstructed path to freedom while feeding on their lives. Lifestealer still wears the broken shackles as a warning that none may hold him, but on the inside remains a prisoner. Two minds inhabit the single form--a nameless creature of malevolent cunning, and the Master whose voice he pretends to obey.",
          "dota.patch.7.37.life_stealer_life_stealer_feast":"In addition, Lifestealer gains permanent max HP whenever he kills a creep or hero. Max HP per creep kill: 1. Max HP per hero kill: 15",
          "generic.dotacoach":"Dota Coach",
          "generic.deadlockCoach":"Deadlock Coach",
          "generic.rhoTechnologiesLLC":"Rho Technologies LLC",
          "generic.app.windows":"Windows App",
          "generic.app.download":"Download app",
          "generic.app.subscribe":"Subscribe",
          "generic.app.get":"Get the app",
          "generic.heropedia":"Heropedia",
          "generic.itempedia":"Itempedia",
          "generic.heroMatrix":"Hero Matrix",
          "generic.heroBuilds":"Hero Builds",
          "generic.dpc":"Dota Pro Circuit",
          "generic.roshanManagement":"Roshan Management",
          "generic.medalProgression":"Medal Progression",
          "generic.accounts":"Steam Accounts",
          "generic.privacy":"Privacy",
          "generic.contactUs":"Contact us",
          "generic.submit":"Submit",
          "generic.languages":"Languages",
          "generic.articles":"Articles",
          "generic.neutralItems":"Neutral Items",
          "generic.neutralItem":"Neutral Item",
          "generic.daytime":"Daytime",
          "generic.pricing":"Pricing",
          "generic.logoAlt":"A red and white logo with the word 'Dota Coach' in a stylized font.",
          "generic.logoBackgroundAlt":"Dota Coach logo",
          "generic.logoOverwolf":"A logo for Overwolf, a platform for gaming apps.",
          "generic.logoOverwolfDotaCoach":"A logo for Overwolf, a platform for gaming apps, with a link to Dota Coach, an app that provides in-game coaching and support for Dota 2 players.",
          "heropedia.getGuide":"{lane} guide",
          "heropedia.SelectRole":"Select Role",
          "heropedia.AbilityBuild":"Ability Build",
          "heropedia.DisablesBuffsPassives":"Disables, Buffs and Passives",
          "heropedia.Abilities":"Abilities",
          "heropedia.Disables":"Disables",
          "heropedia.DispellableBuffs":"Dispellable Buffs",
          "heropedia.BreakablePassives":"Breakable Passives",
          "heropedia.InterruptsChanneling":"Interrupts Channeling",
          "heropedia.Silences":"Silences",
          "heropedia.Roots":"Roots",
          "heropedia.ItemBuild":"Item Build",
          "heropedia.HeroStrategy":"Hero Strategy",
          "heropedia.CounterStrategy":"Counter Strategy",
          "heropedia.CounterItemsCore":"Counter Items for Core Players",
          "heropedia.CounterItemsSupport":"Counter Items for Support Players",
          "heropedia.popularity":"Popularity",
          "heropedia.leaderboard":"Leaderboard",
          "heropedia.lore":"Lore",
          "heropedia.talents":"Talents",
          "heropedia.facets":"Facets",
          "heropedia.strategy":"Strategy",
          "heropedia.build":"Build",
          "heropedia.matchup":"Matchup",
          "heropedia.roles":"Roles",
          "heropedia.wise-stump-pro-tips":"Wise Stump Pro Tips",
          "hero_tooltip.level":"level",
          "hero_tooltip.at_level":"at level",
          "navbar.wiki":"Wiki",
          "navbar.heroes":"Heroes",
          "navbar.stats":"Stats",
          "navbar.items":"Items",
          "navbar.dpc":"Pro Circuit",
          "navbar.chatbot":"Chatbot",
          "navbar.app":"App",
          "navbar.app.features":"Features",
          "navbar.app.videos":"Videos",
          "navbar.app.FAQs":"FAQs",
          "navbar.more":"More",
          "navbar.team":"Our Team",
          "navbar.serviceStatus":"Service Status",
          "navbar.selectLanguage":"Select Language",
          "footer.disclaimer":"<dota2>Dota 2</dota2> is a registered trademark of <valve>Valve Corporation</valve>.",
          "footer.skellyAlt":"Visit Dota Coach's gaming profile on Skelly.",
          "footer.discordAlt":"Get involved in the Dota Coach community and chat with us on Discord.",
          "footer.redditAlt":"Join the discussion on our subreddit /r/DotaCoachApp.",
          "footer.xAlt":"Follow Dota Coach on X for updates, conversations, and more.",
          "footer.patreonAlt":"Support Dota Coach on Patreon",
          "footer.crowdinAlt":"Contribute to the translation of Dota Coach on Crowdin.",
          "footer.eMailAlt":"Reach out to Dota Coach by e-mail.",
          "meta.pick_rate":"Pick Rate",
          "meta.win_rate":"Win Rate",
          "GameLength":"Game Length",
          "hero.meta.title":"Mastering {heroName} in Dota 2",
          "hero.banRank":"Ban Rank: #",
          "hero.kdaRank":"KDA Rank: #",
          "hero.life_stealer.own_messages.Lifestealer_1_RightclickFeast":"Right-click opponents as much as you can on the lane for extra damage and sustain from Lifestealer's Feast passive. Also, make sure to secure last hits and denies to get free max HP from the passive.",
          "hero.life_stealer.own_messages.Lifestealer_2_OrbOfCorrosion":"Orb of corrosion is great at harrassing enemies in the laning stage and works well with Lifestealer's spells.",
          "hero.life_stealer.own_messages.Lifestealer_3_RageDispel":"Consider investing a point in Rage early on if there's a need for dispel or spell-immunity.",
          "hero.life_stealer.own_messages.Lifestealer_4_RageTP":"If the enemy has no way to cancel rage TP, be more aggresive on sides lanes and rage TP out.",
          "hero.life_stealer.own_messages.Lifestealer_5_DispatchSupport":"Once you hit 6, you are really hard to kill and you can dispatch your support to help other lanes.",
          "hero.life_stealer.own_messages.Lifestealer_6_SaveAlly":"You can save an ally by Infesting it.",
          "hero.life_stealer.own_messages.Lifestealer_7_FightEarly":"Lifestealer doesn't farm fast but is decent at fighting in early to mid game. Join good looking fights.",
          "hero.life_stealer.own_messages.Lifestealer_8_GapCloseInfest":"If you have gap-closing ally you can choose to Infest him to be able to get on top of opponents quickly.",
          "hero.life_stealer.own_messages.Lifestealer_9_CounterItems":"Orchid, Basher and Scythe are problematic. Adjust your playstyle and itemization accordingly.",
          "hero.life_stealer.own_messages.Lifestealer_10_SlowSiege":"You can slow siege opponents' building by damaging it during Rage and then backing away.",
          "hero.life_stealer.enemy_messages.Lifestealer_1_ChipDamage":"Chip damage doesn't work against Lifestealer as he is able to recover with Feast. If you manage to bring him below half HP it will be hard for him to feast as he risks dying",
          "hero.life_stealer.enemy_messages.Lifestealer_2_Boots":"Buy boots early against Lifestealer as he is a fast hero who often buys Venom Orb and rushes Phase Boots",
          "hero.life_stealer.enemy_messages.Lifestealer_3_SpellImmunity":"Items and spells that go through spell immunity are effective against Lifestealer",
          "hero.life_stealer.enemy_messages.Lifestealer_4_Escape":"When you gank Lifestealer he will Rage and teleport out on first signs of trouble. Make sure you disable him before he rages if you do not yet have a disable that goes through spell immunity",
          "hero.life_stealer.enemy_messages.Lifestealer_5_TeamFights":"Lifestealer's main spell in fights is Rage. Play around it by disabling him or by saving heroes he is chasing",
          "hero.life_stealer.enemy_messages.Lifestealer_6_Evasion":"Lifestealer tends to have evasion due to his Radiance and possibly a Halberd purchase. Look to counter it by getting true strike items",
          "hero.life_stealer.enemy_messages.Lifestealer_7_Infest":"Keep in mind that Lifestealer might be infested in the initiating hero or that he can use Infest to escape",
          "Situational":"Situational",
          "SituationalBaer":"Situational Baer",
          "Neutral":"Neutral",
          "NeutralBaer":"Neutral Baer",
          "Starting":"Starting",
          "StartingBaer":"Starting Baer",
          "Core":"Core",
          "CoreBaer":"Core Baer",
          "LaningPhaseCap":"Laning Phase",
          "Heroes":"Heroes",
          "Builds":"Builds",
          "GetTheInGameGuide":"Get the in-game {guides, plural, one {guide} other {guides}}",
          "generic.matches":"Matches",
          "Meta":"Meta",
          "Matchups":"Matchups"
       },
       "host":"dotacoach.gg",
       "pageProps":{
          "pathname":"/_next/data/hpZpK3o-c8XuUOeHEWcL6/en/heroes/lifestealer.json",
          "heroUrlName":"lifestealer",
          "gameData":{
             "id":54,
             "npcShortName":"life_stealer",
             "previousHero":"lich",
             "nextHero":"lina",
             "complexity":2,
             "roles":{
                "DOTA_HeroRole_Carry":2,
                "DOTA_HeroRole_Durable":2,
                "DOTA_HeroRole_Escape":1,
                "DOTA_HeroRole_Disabler":1
             },
             "bounds_hull_name":"DOTA_HULL_SIZE_HERO",
             "patch":"7.37c",
             "primary_attr":"dota.Strength",
             "strength_base":25,
             "strength_gain":2.4,
             "strength_max":108.6,
             "agility_base":19,
             "agility_gain":1.9,
             "agility_max":88.1,
             "intelligence_base":15,
             "intelligence_gain":1.8,
             "intelligence_max":81.2,
             "attributes_base":59,
             "attributes_gain":6.1,
             "attributes_max":277.9,
             "health_base":670,
             "health_gain":52.8,
             "health_max":2496,
             "health_regen_base":2.75,
             "health_regen_gain":0.24,
             "health_regen_max":11.11,
             "mana_base":255,
             "mana_gain":21.6,
             "mana_max":1047,
             "mana_regen_base":0.75,
             "mana_regen_gain":0.09000000000000001,
             "mana_regen_max":4.0600000000000005,
             "attack_range":150,
             "attack_type":"DOTA_Chat_Melee",
             "attack_speed_base":119,
             "attack_speed_gain":1.9,
             "attack_speed_max":188.1,
             "attack_rate":1.7,
             "attack_damage_min":41,
             "attack_damage_max":47,
             "attack_damage_gain":2.4,
             "attack_damage_lvl30_min":124.6,
             "attack_damage_lvl30_max":130.6,
             "attack_animation_point":0.39,
             "projectile_speed":900,
             "movement_speed":320,
             "movement_turn_rate":0.9,
             "armor_base":4.166666666666666,
             "armor_gain":0.31666666666666665,
             "armor_max":15.683333333333332,
             "phyiscal_resistance_base":20,
             "phyiscal_resistance_max":48.48016486347243,
             "magical_resistance_base":26.5,
             "magical_resistance_gain":0.18000000000000002,
             "magical_resistance_max":33.1,
             "vision_day":1800,
             "vision_night":800,
             "facets":[
                {
                   "facet":"life_stealer_maxhp_gain",
                   "icon":"armor",
                   "color":"Yellow",
                   "gradientId":3,
                   "name":"dota.abilities.life_stealer_corpse_eater",
                   "abilities":[
                      {
                         "ability":"life_stealer_corpse_eater",
                         "abilityValues":{
                            "bonus_hp_per_hero":15,
                            "bonus_hp_per_creep":1
                         },
                         "newAbility":{
                            "ability":"life_stealer_corpse_eater",
                            "name":"dota.abilities.life_stealer_corpse_eater",
                            "passive":"gameData.ability.passive_yes",
                            "breakable":"DOTA_AbilityTooltip_Breakable",
                            "abilityValues":{
                               "bonus_hp_per_hero":15,
                               "bonus_hp_per_creep":1
                            },
                            "dispellable":"DOTA_ToolTip_Dispellable_No",
                            "description":"dota.abilities.life_stealer_corpse_eater.Description"
                         }
                      }
                   ]
                },
                {
                   "facet":"life_stealer_rage",
                   "icon":"lifestealer_rage",
                   "color":"Yellow",
                   "gradientId":3,
                   "name":"dota.abilities.life_stealer_rage",
                   "description":"dota.facets.life_stealer_rage.Description",
                   "abilities":[
                      {
                         "ability":"life_stealer_rage",
                         "abilityValues":{
                            "duration":{
                               "value":[
                                  3,
                                  4,
                                  5,
                                  6
                               ],
                               "special_bonus_unique_lifestealer":1
                            },
                            "magic_resist":{
                               "value":80
                            },
                            "status_resist":{
                               "value":0
                            },
                            "debuff_immunity":{
                               "value":1
                            },
                            "bonus_armor":{
                               "value":0
                            }
                         },
                         "valueDescriptions":[
                            "duration",
                            "magic_resist",
                            "status_resist"
                         ],
                         "newAbility":{
                            "ability":"life_stealer_rage",
                            "name":"dota.abilities.life_stealer_rage",
                            "target":"DOTA_ToolTip_Ability_NoTarget",
                            "abilityValues":{
                               "duration":{
                                  "value":[
                                     3,
                                     4,
                                     5,
                                     6
                                  ],
                                  "special_bonus_unique_lifestealer":1
                               },
                               "magic_resist":{
                                  "value":80
                               },
                               "status_resist":{
                                  "value":0
                               },
                               "debuff_immunity":{
                                  "value":1
                               },
                               "bonus_armor":{
                                  "value":0
                               }
                            },
                            "cooldown":[
                               20,
                               19,
                               18,
                               17
                            ],
                            "manaCost":[
                               80,
                               100,
                               120,
                               140
                            ],
                            "dispellable":"DOTA_ToolTip_Dispellable_No",
                            "description":"dota.abilities.life_stealer_rage.Description",
                            "lore":"dota.abilities.life_stealer_rage.Lore",
                            "valueDescriptions":[
                               "duration",
                               "magic_resist",
                               "status_resist"
                            ]
                         }
                      }
                   ]
                },
                {
                   "facet":"life_stealer_rage_dispell",
                   "icon":"broken_chain",
                   "color":"Red",
                   "gradientId":0,
                   "name":"dota.abilities.life_stealer_unfettered",
                   "description":"dota.facets.life_stealer_rage_dispell.Description",
                   "abilities":[
                      {
                         "ability":"life_stealer_unfettered",
                         "abilityValues":{
                            "duration":{
                               "value":[
                                  4,
                                  5,
                                  6,
                                  7
                               ],
                               "special_bonus_unique_lifestealer":1
                            },
                            "magic_resist":{
                               "value":60
                            },
                            "status_resist":{
                               "value":60
                            }
                         },
                         "valueDescriptions":[
                            "duration",
                            "magic_resist",
                            "status_resist"
                         ],
                         "newAbility":{
                            "ability":"life_stealer_unfettered",
                            "name":"dota.abilities.life_stealer_unfettered",
                            "target":"DOTA_ToolTip_Ability_NoTarget",
                            "abilityValues":{
                               "duration":{
                                  "value":[
                                     4,
                                     5,
                                     6,
                                     7
                                  ],
                                  "special_bonus_unique_lifestealer":1
                               },
                               "magic_resist":{
                                  "value":60
                               },
                               "status_resist":{
                                  "value":60
                               }
                            },
                            "cooldown":[
                               20,
                               19,
                               18,
                               17
                            ],
                            "manaCost":[
                               80,
                               100,
                               120,
                               140
                            ],
                            "dispellable":"DOTA_ToolTip_Dispellable_No",
                            "description":"dota.abilities.life_stealer_unfettered.Description",
                            "valueDescriptions":[
                               "duration",
                               "magic_resist",
                               "status_resist"
                            ]
                         }
                      }
                   ]
                }
             ],
             "innate":{
                "ability":"life_stealer_feast",
                "name":"dota.abilities.life_stealer_feast",
                "levelsWith":"life_stealer_infest",
                "passive":"gameData.ability.passive_yes",
                "breakable":"DOTA_AbilityTooltip_Breakable",
                "abilityValues":{
                   "hp_leech_percent":{
                      "value":[
                         1.25,
                         1.75,
                         2.25,
                         2.75
                      ],
                      "special_bonus_unique_lifestealer_3":1
                   },
                   "hp_damage_percent":{
                      "value":[
                         1.25,
                         1.75,
                         2.25,
                         2.75
                      ],
                      "special_bonus_unique_lifestealer_3":1,
                      "CalculateSpellDamageTooltip":0
                   },
                   "bonus_hp_per_hero":15,
                   "bonus_hp_per_creep":1,
                   "creep_deny_percent":75,
                   "bonus_hp_total":{
                      "dynamic_value":"true"
                   }
                },
                "piercesDebuffImmunity":"DOTA_ToolTip_PiercesSpellImmunity_Yes",
                "damage_type":"physical",
                "dispellable":"DOTA_ToolTip_Dispellable_No",
                "description":"dota.abilities.life_stealer_feast.Description",
                "lore":"dota.abilities.life_stealer_feast.Lore",
                "notes":[
                   "dota.abilities.life_stealer_feast.Note0",
                   "dota.abilities.life_stealer_feast.Note1",
                   "dota.abilities.life_stealer_feast.Note2",
                   "dota.abilities.life_stealer_feast.Note3",
                   "dota.abilities.life_stealer_feast.Note4"
                ],
                "patchNotes":[
                   {
                      "patch":"7.37",
                      "notes":[
                         {
                            "message":"dota.patch.7.37.life_stealer_life_stealer_feast"
                         }
                      ]
                   }
                ],
                "valueDescriptions":[
                   "hp_leech_percent",
                   "hp_damage_percent",
                   "bonus_hp_per_hero",
                   "bonus_hp_per_creep",
                   "bonus_hp_total"
                ]
             },
             "abilities":[
                {
                   "ability":"life_stealer_rage",
                   "name":"dota.abilities.life_stealer_rage",
                   "target":"DOTA_ToolTip_Ability_NoTarget",
                   "abilityValues":{
                      "duration":{
                         "value":[
                            3,
                            4,
                            5,
                            6
                         ],
                         "special_bonus_unique_lifestealer":1
                      },
                      "magic_resist":{
                         "value":80
                      },
                      "status_resist":{
                         "value":0
                      },
                      "debuff_immunity":{
                         "value":1
                      },
                      "bonus_armor":{
                         "value":0
                      }
                   },
                   "cooldown":[
                      20,
                      19,
                      18,
                      17
                   ],
                   "manaCost":[
                      80,
                      100,
                      120,
                      140
                   ],
                   "hotkey":"Q",
                   "dispellable":"DOTA_ToolTip_Dispellable_No",
                   "description":"dota.abilities.life_stealer_rage.Description",
                   "lore":"dota.abilities.life_stealer_rage.Lore",
                   "valueDescriptions":[
                      "duration",
                      "magic_resist",
                      "status_resist"
                   ]
                },
                {
                   "ability":"life_stealer_unfettered",
                   "name":"dota.abilities.life_stealer_unfettered",
                   "target":"DOTA_ToolTip_Ability_NoTarget",
                   "abilityValues":{
                      "duration":{
                         "value":[
                            4,
                            5,
                            6,
                            7
                         ],
                         "special_bonus_unique_lifestealer":1
                      },
                      "magic_resist":{
                         "value":60
                      },
                      "status_resist":{
                         "value":60
                      }
                   },
                   "cooldown":[
                      20,
                      19,
                      18,
                      17
                   ],
                   "manaCost":[
                      80,
                      100,
                      120,
                      140
                   ],
                   "hotkey":"Q",
                   "dispellable":"DOTA_ToolTip_Dispellable_No",
                   "description":"dota.abilities.life_stealer_unfettered.Description",
                   "valueDescriptions":[
                      "duration",
                      "magic_resist",
                      "status_resist"
                   ]
                },
                {
                   "ability":"life_stealer_open_wounds",
                   "name":"dota.abilities.life_stealer_open_wounds",
                   "target":"DOTA_ToolTip_Ability_Target",
                   "abilityValues":{
                      "duration":7,
                      "slow_steps":{
                         "value":[
                            -50,
                            -50,
                            -40,
                            -30,
                            -20,
                            -10,
                            -10,
                            -10
                         ],
                         "special_bonus_unique_lifestealer_4":-15
                      },
                      "heal_percent":{
                         "value":[
                            20,
                            30,
                            40,
                            50
                         ],
                         "special_bonus_unique_lifestealer_6":25
                      },
                      "max_health_as_damage_pct":0,
                      "spread_radius":{
                         "value":700,
                         "affected_by_aoe_increase":1
                      },
                      "slow_step_pct_of_max":[
                         70,
                         80,
                         90,
                         100
                      ],
                      "slow_tooltip":{
                         "value":[
                            35,
                            40,
                            45,
                            50
                         ],
                         "special_bonus_unique_lifestealer_4":15
                      }
                   },
                   "cooldown":[
                      30,
                      25,
                      20,
                      15
                   ],
                   "manaCost":75,
                   "castRange":[
                      300,
                      400,
                      500,
                      600
                   ],
                   "piercesDebuffImmunity":"DOTA_ToolTip_PiercesSpellImmunity_No",
                   "hotkey":"W",
                   "dispellable":"DOTA_ToolTip_Dispellable_Yes_Soft",
                   "description":"dota.abilities.life_stealer_open_wounds.Description",
                   "lore":"dota.abilities.life_stealer_open_wounds.Lore",
                   "notes":[
                      "dota.abilities.life_stealer_open_wounds.Note0",
                      "dota.abilities.life_stealer_open_wounds.Note1"
                   ],
                   "valueDescriptions":[
                      "duration",
                      "heal_percent",
                      "slow_tooltip"
                   ]
                },
                {
                   "ability":"life_stealer_ghoul_frenzy",
                   "name":"dota.abilities.life_stealer_ghoul_frenzy",
                   "passive":"gameData.ability.passive_yes",
                   "breakable":"DOTA_AbilityTooltip_Breakable",
                   "abilityValues":{
                      "movement_speed_bonus":{
                         "value":[
                            2,
                            4,
                            6,
                            8
                         ],
                         "special_bonus_unique_lifestealer_2":3
                      },
                      "attack_speed_bonus":{
                         "value":[
                            30,
                            50,
                            70,
                            90
                         ],
                         "special_bonus_unique_lifestealer_5":50
                      }
                   },
                   "piercesDebuffImmunity":"DOTA_ToolTip_PiercesSpellImmunity_No",
                   "dispellable":"DOTA_ToolTip_Dispellable_Yes_Soft",
                   "description":"dota.abilities.life_stealer_ghoul_frenzy.Description",
                   "valueDescriptions":[
                      "movement_speed_bonus",
                      "attack_speed_bonus"
                   ]
                }
             ],
             "ultimate":{
                "ability":"life_stealer_infest",
                "name":"dota.abilities.life_stealer_infest",
                "target":"DOTA_ToolTip_Ability_Target",
                "abilityValues":{
                   "radius":{
                      "value":[
                         700,
                         700,
                         700
                      ],
                      "affected_by_aoe_increase":1
                   },
                   "damage":{
                      "value":[
                         150,
                         275,
                         400
                      ],
                      "special_bonus_unique_lifestealer_infest_damage":150
                   },
                   "bonus_movement_speed":{
                      "value":[
                         15,
                         20,
                         25
                      ],
                      "special_bonus_unique_lifestealer_infest_target_bonus":15
                   },
                   "bonus_health":{
                      "value":[
                         400,
                         800,
                         1200
                      ],
                      "special_bonus_unique_lifestealer_infest_target_bonus":"+15%"
                   },
                   "self_regen":{
                      "value":[
                         3,
                         4,
                         5
                      ],
                      "special_bonus_scepter":"+100%"
                   },
                   "infest_duration_enemy":{
                      "value":0,
                      "special_bonus_scepter":5
                   },
                   "AbilityCastRange":{
                      "value":150,
                      "special_bonus_scepter":250
                   },
                   "attack_rate_enemy":{
                      "value":0,
                      "special_bonus_scepter":1.25
                   },
                   "AbilityCooldown":{
                      "value":[
                         80,
                         65,
                         50
                      ],
                      "special_bonus_scepter":"=20"
                   },
                   "open_wounds_duration_pct":{
                      "value":0,
                      "special_bonus_shard":50
                   }
                },
                "cooldown":[
                   80,
                   65,
                   50
                ],
                "manaCost":[
                   100,
                   125,
                   150
                ],
                "castRange":150,
                "piercesDebuffImmunity":"DOTA_ToolTip_PiercesSpellImmunity_Yes",
                "hotkey":"R",
                "damage_type":"magical",
                "dispellable":"DOTA_ToolTip_Dispellable_No",
                "description":"dota.abilities.life_stealer_infest.Description",
                "lore":"dota.abilities.life_stealer_infest.Lore",
                "notes":[
                   "dota.abilities.life_stealer_infest.Note0",
                   "dota.abilities.life_stealer_infest.Note1",
                   "dota.abilities.life_stealer_infest.Note2",
                   "dota.abilities.life_stealer_infest.Note3"
                ],
                "valueDescriptions":[
                   "radius",
                   "damage",
                   "bonus_movement_speed",
                   "bonus_health",
                   "self_regen"
                ],
                "shardUpgrade":"dota.abilities.life_stealer_infest.ShardDescription",
                "scepterUpgrade":"dota.abilities.life_stealer_infest.ScepterDescription"
             },
             "talents":{
                "abilities":[
                   "special_bonus_unique_lifestealer_infest_damage",
                   "special_bonus_unique_lifestealer_2",
                   "special_bonus_unique_lifestealer_5",
                   "special_bonus_unique_lifestealer_4",
                   "special_bonus_unique_lifestealer_infest_target_bonus",
                   "special_bonus_unique_lifestealer_6",
                   "special_bonus_unique_lifestealer_3",
                   "special_bonus_unique_lifestealer"
                ],
                "values":{
                   "special_bonus_unique_lifestealer_infest_damage":{
                      "damage":150
                   },
                   "special_bonus_unique_lifestealer_2":{
                      "movement_speed_bonus":3
                   },
                   "special_bonus_unique_lifestealer_5":{
                      "attack_speed_bonus":50
                   },
                   "special_bonus_unique_lifestealer_4":{
                      "slow_steps":-15,
                      "slow_tooltip":15
                   },
                   "special_bonus_unique_lifestealer_infest_target_bonus":{
                      "bonus_movement_speed":15,
                      "bonus_health":"+15%"
                   },
                   "special_bonus_unique_lifestealer_6":{
                      "heal_percent":25
                   },
                   "special_bonus_unique_lifestealer_3":{
                      "hp_leech_percent":1,
                      "hp_damage_percent":1
                   },
                   "special_bonus_unique_lifestealer":{
                      "duration":1
                   }
                }
             },
             "lore":"dota.heroes.life_stealer.Lore",
             "hiddenAbilities":[
                {
                   "ability":"life_stealer_consume",
                   "name":"dota.abilities.life_stealer_consume",
                   "target":"DOTA_ToolTip_Ability_NoTarget",
                   "hotkey":"R",
                   "description":"dota.abilities.life_stealer_consume.Description"
                }
             ]
          },
          "dotaBrain":{
             "ownHeroMessages":[
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_1_RightclickFeast",
                   "image":{
                      "type":"ability",
                      "name":"life_stealer_feast"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_2_OrbOfCorrosion",
                   "image":{
                      "type":"item",
                      "name":"orb_of_corrosion"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_3_RageDispel",
                   "image":{
                      "type":"ability",
                      "name":"life_stealer_rage"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_4_RageTP",
                   "image":{
                      "type":"item",
                      "name":"tpscroll"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_5_DispatchSupport"
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_6_SaveAlly",
                   "image":{
                      "type":"ability",
                      "name":"life_stealer_infest"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_7_FightEarly"
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_8_GapCloseInfest",
                   "image":{
                      "type":"ability",
                      "name":"life_stealer_infest"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_9_CounterItems",
                   "image":{
                      "type":"item",
                      "name":"black_king_bar"
                   }
                },
                {
                   "messageId":"hero.life_stealer.own_messages.Lifestealer_10_SlowSiege",
                   "image":{
                      "type":"ability",
                      "name":"life_stealer_rage"
                   }
                }
             ],
             "enemyHeroMessages":[
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_1_ChipDamage"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_2_Boots"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_3_SpellImmunity"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_4_Escape"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_5_TeamFights"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_6_Evasion"
                },
                {
                   "messageId":"hero.life_stealer.enemy_messages.Lifestealer_7_Infest"
                }
             ]
          },
          "stats":{
             "winRank":51,
             "winRate":0.5018833658438152,
             "pickRank":76,
             "banRank":30,
             "kdaRank":7,
             "heroVariants":{
                "0":{
                   "pick_rate":0.0000228694423891841,
                   "win_rate":0.4117647058823529
                },
                "2":{
                   "pick_rate":0.8524799892379095,
                   "win_rate":0.5091614051643467
                },
                "3":{
                   "pick_rate":0.14749714131970135,
                   "win_rate":0.45983291074588206
                }
             },
             "patches":[
                {
                   "patch":"7.37c",
                   "pickRate":0.055597040488796226,
                   "winRate":0.5018833658438152
                },
                {
                   "patch":"7.37b",
                   "pickRate":0.07145983888169381,
                   "winRate":0.5056534720622758
                },
                {
                   "patch":"7.37",
                   "pickRate":0.08082996113700669,
                   "winRate":0.5120065136309302
                },
                {
                   "patch":"7.36c",
                   "pickRate":0.09699282767898358,
                   "winRate":0.5076757181364386
                },
                {
                   "patch":"7.36b",
                   "pickRate":0.15772440364000245,
                   "winRate":0.5425334495808757
                },
                {
                   "patch":"7.36a",
                   "pickRate":0.12439112188498185,
                   "winRate":0.5203136920129261
                },
                {
                   "patch":"7.36",
                   "pickRate":0.13128365476417797,
                   "winRate":0.4867842611076567
                },
                {
                   "patch":"7.35d",
                   "pickRate":0.16569693468513613,
                   "winRate":0.5418810195571347
                }
             ],
             "talents":{
                "special_bonus_unique_lifestealer_infest_damage":{
                   "winRate":-0.03371909773166859,
                   "pickRate":0.267023563022567
                },
                "special_bonus_unique_lifestealer_2":{
                   "winRate":0.03371909773166859,
                   "pickRate":0.732976436977433
                },
                "special_bonus_unique_lifestealer_5":{
                   "winRate":0.04512862457380762,
                   "pickRate":0.9299244828568194
                },
                "special_bonus_unique_lifestealer_4":{
                   "winRate":-0.04512862457380762,
                   "pickRate":0.07007551714318064
                },
                "special_bonus_unique_lifestealer_infest_target_bonus":{
                   "winRate":0.006745085476071666,
                   "pickRate":0.1495362409462769
                },
                "special_bonus_unique_lifestealer_6":{
                   "winRate":-0.006745085476071666,
                   "pickRate":0.8504637590537231
                },
                "special_bonus_unique_lifestealer_3":{
                   "winRate":0.0031041596927412485,
                   "pickRate":0.27439648927045773
                },
                "special_bonus_unique_lifestealer":{
                   "winRate":-0.0031041596927412485,
                   "pickRate":0.7256035107295422
                }
             }
          }
       }
    },
    "__N_SSP":true
 }