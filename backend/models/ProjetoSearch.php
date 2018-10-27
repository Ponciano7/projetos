<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProjetoModel;

/**
 * ProjetoSearch represents the model behind the search form of `app\models\ProjetoModel`.
 */
class ProjetoSearch extends ProjetoModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['num_processo', 'inicio_previsto', 'termino', 'nome_coordenador', 'edital', 'titulo_projeto', 'num_protocolo', 'numero_fapeam_outorga', 'publicacao_diario_oficial'], 'safe'],
            [['cotacao_moeda_estrangeira'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProjetoModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'inicio_previsto' => $this->inicio_previsto,
            'termino' => $this->termino,
            'cotacao_moeda_estrangeira' => $this->cotacao_moeda_estrangeira,
            'publicacao_diario_oficial' => $this->publicacao_diario_oficial,
        ]);

        $query->andFilterWhere(['like', 'num_processo', $this->num_processo])
            ->andFilterWhere(['like', 'nome_coordenador', $this->nome_coordenador])
            ->andFilterWhere(['like', 'edital', $this->edital])
            ->andFilterWhere(['like', 'titulo_projeto', $this->titulo_projeto])
            ->andFilterWhere(['like', 'num_protocolo', $this->num_protocolo])
            ->andFilterWhere(['like', 'numero_fapeam_outorga', $this->numero_fapeam_outorga]);

        return $dataProvider;
    }
}
