<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Distribuidor;

/**
 * DistribuidorSearch represents the model behind the search form about `common\models\Distribuidor`.
 */
class DistribuidorSearch extends Distribuidor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado', 'create_user_id', 'update_user_id', 'delete_user_id'], 'integer'],
            [['nombre', 'username', 'curp', 'curp_registro', 'rfc', 'rfc_registro', 'banco', 'numero_cuenta', 'clabe', 'identificacion', 'estado_cuenta', 'comprobante_domicilio', 'create_time', 'update_time', 'delete_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Distribuidor::find();

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
            'estado' => $this->estado,
            'create_user_id' => $this->create_user_id,
            'create_time' => $this->create_time,
            'update_user_id' => $this->update_user_id,
            'update_time' => $this->update_time,
            'delete_user_id' => $this->delete_user_id,
            'delete_time' => $this->delete_time,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'curp', $this->curp])
            ->andFilterWhere(['like', 'curp_registro', $this->curp_registro])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'rfc_registro', $this->rfc_registro])
            ->andFilterWhere(['like', 'banco', $this->banco])
            ->andFilterWhere(['like', 'numero_cuenta', $this->numero_cuenta])
            ->andFilterWhere(['like', 'clabe', $this->clabe])
            ->andFilterWhere(['like', 'identificacion', $this->identificacion])
            ->andFilterWhere(['like', 'estado_cuenta', $this->estado_cuenta])
            ->andFilterWhere(['like', 'comprobante_domicilio', $this->comprobante_domicilio]);

        return $dataProvider;
    }
}
