{extends file="index.tpl"}
{assign var="nav" value="nav"}
{assign var="content" value="content"}
{include file="nav/navbar.tpl"}
{block name="container"}
    <div class="tabbed">
        <input name="tabbed" id="tabbed1" type="radio" checked>
        <section>
            <h1>
                <label for="tabbed1">Modalités</label>
            </h1>

            <div>
                {include file="basedata/modality/blockpayement.tpl"}
                {include file="basedata/modality/steppayement.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed3" type="radio">
        <section>
            <h1>
                <label for="tabbed3">Localités</label>
            </h1>
            <div>
                {include file="basedata/locality/town.tpl"}
                {include file="basedata/locality/city.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed4" type="radio">
        <section>
            <h1>
                <label for="tabbed4">coéficiants</label>
            </h1>
            <div>
                {include file="basedata/credit/credit.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed5" type="radio">
        <section>
            <h1>
                <label for="tabbed5">Matières</label>
            </h1>
            <div>
                {*{include file="basedata/modality/blockpayement.tpl"}
                {include file="basedata/modality/steppayement.tpl"}*}
            </div>
        </section>
        <input name="tabbed" id="tabbed6" type="radio">
        <section>
            <h1>
                <label for="tabbed6">Type d'évaluation</label>
            </h1>
            <div>
               {include file="basedata/evaluationtype/evaluationType.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed8" type="radio">
        <section>
            <h1>
                <label for="tabbed8">Type de Frais</label>
            </h1>
            <div>
                {include file="basedata/feetype/feetype.tpl"}

            </div>
        </section>
        <input name="tabbed" id="tabbed9" type="radio">
        <section>
            <h1>
                <label for="tabbed9">Sexes</label>
            </h1>
            <div>
                {include file="basedata/gender/gender.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed10" type="radio">
        <section>
            <h1>
                <label for="tabbed10">Classes</label>
            </h1>
            <div>
                {include file="basedata/hall/hall.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed11" type="radio">
        <section>
            <h1>
                <label for="tabbed11">Permissions</label>
            </h1>
            <div>
               {include file="basedata/permission/permission.tpl"}
            </div>
        </section>
        <input name="tabbed" id="tabbed12" type="radio">
        <section>
            <h1>
                <label for="tabbed12">Sessions</label>
            </h1>
            <div>
                {include file="basedata/session/session.tpl"}
            </div>
        </section>
    </div>
{/block}