---
layout: post
title: 미친 닷지볼 서버 만들기 (Crazy Dodgeball)
categories: [tf2]
tags: [tf2]
fullview: true

---

---
기본적으로 서버에 닷지볼 플러그인이 깔려있는 가정하에 작성합니다. [general.cfg 확인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/configs/dodgeball/general.cfg)

### 사진 속 컨픽 그대로 복붙 하세요

![_config.yml]({{ site.baseurl }}/images/dodgeball/turn.jpg)

### 옵션 

"neutral rocket" <-- 1로 되어 있을텐데 기본값은 0값이며 1은 개인전 모드를 활성화 했을때 작성하세요.

"on spawn" "tf_dodgeball_soloplay @rocket" [개인전 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/soloplay.sp) 깔았을때 작성하세요.

"on deflect" "tf_dodgeball_target @target ; tf_dodgeball_deflections @deflections ; tf_dodgeball_soloplay @rocket"

"tf_dodgeball_target @target" [타겟 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/dodgeball_Target.sp) 깔았을때 작성하세요.

"tf_dodgeball_deflections @deflections" [반사 횟수 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/dodgeball_deflections.sp) 깔았을때 작성하세요.

### 플러그인

[개인전 닷지볼 필수 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/TF2_Dodgeball.sp) 원본 닷지볼을 수정하여 만들었어여

[플레이어 이동 속도 최대 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/speed.sp) 넣으면 작동해요

[게임 속도 조절 플러그인](https://github.com/fhfh6666/tf2_plugins/blob/master/dodgeball/agamespeed.sp) !cc 0.1 ~ 10으로 조절해요


### 맵

가능하면 가장 큰 맵이 좋아요 (tfdb_desert_madness_a9)

---
