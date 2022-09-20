<?php

namespace App\Helper;

class Domain
{
    const LONG_SHORT = [
        'https://www.postimees.ee/' => 'https://pmo.ee/',
        'https://4jaleht.postimees.ee/' => 'https://j.pmo.ee/',
        'https://60pluss.postimees.ee/' => 'https://60.pmo.ee/',
        'https://arvamus.postimees.ee/' => 'https://a.pmo.ee/',
        'https://barbos.postimees.ee/' => 'https://b.pmo.ee/',
        'https://elu24.postimees.ee/' => 'https://e.pmo.ee/',
        'https://faktikontroll.postimees.ee/' => 'https://f.pmo.ee/',
        'https://haridus.postimees.ee/' => 'https://h.pmo.ee/',
        'https://igra.postimees.ee/' => 'https://ig.pmo.ee/',
        'https://ilmajaam.postimees.ee/' => 'https://il.pmo.ee/',
        'https://investor.postimees.ee/' => 'https://in.pmo.ee/',
        'https://kodu.postimees.ee/' => 'https://kd.pmo.ee/',
        'https://kultuur.postimees.ee/' => 'https://kl.pmo.ee/',
        'https://kuuuurija.postimees.ee/' => 'https://ku.pmo.ee/',
        'https://leht.postimees.ee/' => 'https://le.pmo.ee/',
        'https://limon.postimees.ee/' => 'https://li.pmo.ee/',
        'https://maaelu.postimees.ee/' => 'https://ma.pmo.ee/',
        'https://maailm.postimees.ee/' => 'https://mi.pmo.ee/',
        'https://majandus.postimees.ee/' => 'https://mj.pmo.ee/',
        'https://meeldib.postimees.ee/' =>  'https://ml.pmo.ee/',
        'https://merendus.postimees.ee/' => 'https://me.pmo.ee/',
        'https://naine.postimees.ee/' => 'https://na.pmo.ee/',
        'https://news.postimees.ee/' => 'https://n.pmo.ee/',
        'https://parnu.postimees.ee/' => 'https://pa.pmo.ee/',
        'https://prognoz.postimees.ee/' => 'https://pr.pmo.ee/',
        'https://raamatud.postimees.ee/' => 'https://ra.pmo.ee/',
        'https://reis.postimees.ee/' => 'https://re.pmo.ee/',
        'https://ristsona.postimees.ee/' => 'https://ri.pmo.ee/',
        'https://roheline.postimees.ee/' => 'https://ro.pmo.ee/',
        'https://rus.postimees.ee/' => 'https://ru.pmo.ee/',
        'https://sport.postimees.ee/' => 'https://s.pmo.ee/',
        'https://startup.postimees.ee/' => 'https://st.pmo.ee/',
        'https://tarbija.postimees.ee/' => 'https://tb.pmo.ee/',
        'https://tartu.postimees.ee/' => 'https://t.pmo.ee/',
        'https://teadus.postimees.ee/' => 'https://td.pmo.ee/',
        'https://teejuhid.postimees.ee/' => 'https://tj.pmo.ee/',
        'https://tehnika.postimees.ee/' => 'https://th.pmo.ee/',
        'https://tervis.postimees.ee/' => 'https://tr.pmo.ee/',
        'https://too.postimees.ee/' => 'https://to.pmo.ee/',
        'https://tv.postimees.ee/' => 'https://tv.pmo.ee/',
        'https://wallstreetjournal.postimees.ee/' => 'https://w.pmo.ee/',
        'https://ypsilon.postimees.ee/' => 'https://y.pmo.ee/',
        'https://virumaateataja.postimees.ee/' => 'https://v.pmo.ee/',
        'https://zdorovje.postimees.ee/' => 'https://z.pmo.ee/'
    ];

    public static function encode(string $longDomain): ?string
    {
        return self::LONG_SHORT[$longDomain] ?? null;
    }
}
