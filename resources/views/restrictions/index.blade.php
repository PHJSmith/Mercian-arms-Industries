@extends('layouts.app')

@section('main')
  <div class="navigation2top">
    <div class="wrap">
      <a href="{{route('faq.index')}}">FAQ</a>
      <a href="{{route('specifics.index')}}">Class Military Specifics</a>
    </div>
  </div>
  <h1>Independant Defensive Militaries</h1>
  <h2></h2>
  <br>
  <br>
  <p>The Mercian Authority understands that it is difficult to place all your trust in one body; and as such, do not expect you, the planets of the Mercian Union, to rely entirely on the Corpus Militaris for your defence.</p>
  <p>Every planet in the Union will be allowed an independant defensive military; it will be governed and controlled by commanders chosen by your planetary government.</p>
  <p>There are of course limitations to the strength of your IDM, but we trust you will understand our logic and find the limitations more than acceptable.</p>
  <p>The size of permitted IDMs is a decision which has been very carefully chosen; an IDM must be large enough to protect a planet from invasion in the unlikely event of Corpus Militaris absence, but also small enough that it does not threaten nearby planets or allow any single planet to threaten the stability and safety of the Mercian Union as a whole.</p>
  <p>Each planet has been ranked according to planetary size, population, proximity to potential threats and strategic significance to the Union as a whole.</p>
  <ul>
    <li><strong>Class A:</strong> These planets will be permitted a sizeable planetside force, planetary and orbital weapons, and a small spacefleet.</li>
    <li><strong>Class B:</strong> These planets will be permitted a planetside force, planetary and orbital weapons, but no warships.</li>
    <li><strong>Class C:</strong> These planets will be able to field planetside forces as well planetary guns and shields, but no armed spacecraft.</li>
    <li><strong>Class D:</strong> Planets of this class may field shields and small arms troops, as well as a small planetside force.</li>
    <li><strong>Class Null:</strong> Any planet which abuses the trust of the Authority and rebels against, threatens or undermines the Mercian Authority will be relegated to this class. Planets that assault other Union planets or field militaries not permitted by the Authority will also be relegated. This relegation will always be temporary, although the length of relegation can vary. Planets of this class may not field any military of any kind, bar small arms infantry and police. The planet will be assigned a Corpus Militaris detachment to protect it.</li>
    <li><strong>Class AA:</strong> In the event that a planet becomes involved in a warzone or is otherwise threatened by forces opposing the Mercian Authority, emergency measures will be taken and the planet will not be denied a military of sufficient strength to protect its people. The IDM restrictions will be lessened or removed entirely until the threat is removed.</p>
  </ul>
  <br>
@endsection
